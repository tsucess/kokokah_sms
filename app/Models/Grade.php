<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'academic_session_id',
        'score',
        'total',
        'grade',
        'remarks',
    ];

    protected $casts = [
        'score' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    /**
     * Get the student that owns the grade.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get the subject for this grade.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Get the academic session for this grade.
     */
    public function academicSession()
    {
        return $this->belongsTo(AcademicSession::class);
    }

    /**
     * Calculate the percentage score.
     */
    public function getPercentageAttribute()
    {
        if ($this->total == 0) {
            return 0;
        }
        return round(($this->score / $this->total) * 100, 2);
    }

    /**
     * Automatically calculate grade based on score.
     */
    public static function calculateGrade($percentage)
    {
        if ($percentage >= 90) return 'A';
        if ($percentage >= 80) return 'B';
        if ($percentage >= 70) return 'C';
        if ($percentage >= 60) return 'D';
        if ($percentage >= 50) return 'E';
        return 'F';
    }
}

