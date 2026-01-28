<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SchoolClass;
use App\Models\Subject;
use App\Models\AcademicSession;
use App\Models\Grade;
use Illuminate\Http\Request;

class BroadsheetController extends Controller
{
    /**
     * Display the broadsheet for a specific class.
     */
    public function index(Request $request)
    {
        // Get the active academic session
        $session = AcademicSession::where('is_active', true)->first();

        // Get all classes for the dropdown
        $classes = SchoolClass::orderBy('level')->orderBy('code')->get();

        // Get selected class (default to JSS1A if not specified)
        $classId = $request->get('class_id');
        if ($classId) {
            $class = SchoolClass::find($classId);
        } else {
            $class = SchoolClass::where('code', 'JSS1A')->first();
        }

        if (!$class || !$session) {
            return view('school.broadsheet')->with([
                'error' => 'Class or session not found',
                'students' => collect([]),
                'subjects' => collect([]),
                'stats' => $this->getDefaultStats(),
                'classes' => $classes,
                'class' => null,
                'session' => $session,
            ]);
        }

        // Get core subjects
        $subjects = Subject::whereIn('code', ['ENG', 'MATH', 'SCI', 'SST'])->get();

        // Get students in this class
        $students = Student::where('class_id', $class->id)
            ->with(['grades' => function($query) use ($session, $subjects) {
                $query->where('academic_session_id', $session->id)
                      ->whereIn('subject_id', $subjects->pluck('id'));
            }])
            ->get();

        // Calculate statistics
        $stats = $this->calculateStats($students, $subjects, $session);

        return view('school.broadsheet', compact('students', 'subjects', 'stats', 'class', 'session', 'classes'));
    }

    /**
     * Calculate broadsheet statistics.
     */
    private function calculateStats($students, $subjects, $session)
    {
        $allGrades = Grade::where('academic_session_id', $session->id)
            ->whereIn('subject_id', $subjects->pluck('id'))
            ->whereIn('student_id', $students->pluck('id'))
            ->get();

        if ($allGrades->isEmpty()) {
            return $this->getDefaultStats();
        }

        // Calculate class average
        $classAverage = round($allGrades->avg('percentage'), 0);

        // Find top student
        $studentAverages = [];
        foreach ($students as $student) {
            $studentGrades = $allGrades->where('student_id', $student->id);
            if ($studentGrades->count() > 0) {
                $studentAverages[$student->id] = [
                    'name' => $student->full_name,
                    'average' => round($studentGrades->avg('percentage'), 0)
                ];
            }
        }

        $topStudent = collect($studentAverages)->sortByDesc('average')->first();
        $lowestStudent = collect($studentAverages)->sortBy('average')->first();

        // Find top and weakest subjects
        $subjectAverages = [];
        foreach ($subjects as $subject) {
            $subjectGrades = $allGrades->where('subject_id', $subject->id);
            if ($subjectGrades->count() > 0) {
                $subjectAverages[$subject->id] = [
                    'name' => $subject->name,
                    'average' => round($subjectGrades->avg('percentage'), 0)
                ];
            }
        }

        $topSubject = collect($subjectAverages)->sortByDesc('average')->first();
        $weakestSubject = collect($subjectAverages)->sortBy('average')->first();

        // Calculate highest and lowest scores
        $highest = round($allGrades->max('percentage'), 0);
        $lowest = round($allGrades->min('percentage'), 0);

        return [
            'class_average' => $classAverage,
            'top_student' => $topStudent,
            'lowest_student' => $lowestStudent,
            'top_subject' => $topSubject,
            'weakest_subject' => $weakestSubject,
            'highest' => $highest,
            'lowest' => $lowest,
            'total_students' => $students->count(),
        ];
    }

    /**
     * Get default stats when no data is available.
     */
    private function getDefaultStats()
    {
        return [
            'class_average' => 0,
            'top_student' => ['name' => 'N/A', 'average' => 0],
            'lowest_student' => ['name' => 'N/A', 'average' => 0],
            'top_subject' => ['name' => 'N/A', 'average' => 0],
            'weakest_subject' => ['name' => 'N/A', 'average' => 0],
            'highest' => 0,
            'lowest' => 0,
            'total_students' => 0,
        ];
    }
}

