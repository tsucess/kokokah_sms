<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\AcademicSession;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the active academic session
        $session = AcademicSession::where('is_active', true)->first();
        
        if (!$session) {
            $this->command->error('No active academic session found. Please run AcademicSessionSeeder first.');
            return;
        }

        // Get core subjects (English, Maths, Science, Social Studies)
        $subjects = Subject::whereIn('code', ['ENG', 'MATH', 'SCI', 'SST'])->get();
        
        if ($subjects->count() < 4) {
            $this->command->error('Core subjects not found. Please run SubjectSeeder first.');
            return;
        }

        // Get all students
        $students = Student::all();
        
        if ($students->count() == 0) {
            $this->command->error('No students found. Please run StudentSeeder first.');
            return;
        }

        // Create grades for each student for each subject
        foreach ($students as $student) {
            foreach ($subjects as $subject) {
                // Generate random scores with some variation
                $score = rand(30, 95);
                $total = rand(60, 100);
                
                // Calculate percentage and grade
                $percentage = ($score / $total) * 100;
                $grade = Grade::calculateGrade($percentage);
                
                Grade::create([
                    'student_id' => $student->id,
                    'subject_id' => $subject->id,
                    'academic_session_id' => $session->id,
                    'score' => $score,
                    'total' => $total,
                    'grade' => $grade,
                    'remarks' => $this->getRemarks($grade),
                ]);
            }
        }
    }

    /**
     * Get remarks based on grade.
     */
    private function getRemarks($grade)
    {
        $remarks = [
            'A' => 'Excellent performance',
            'B' => 'Very good performance',
            'C' => 'Good performance',
            'D' => 'Fair performance',
            'E' => 'Poor performance',
            'F' => 'Failed - needs improvement',
        ];

        return $remarks[$grade] ?? 'No remarks';
    }
}

