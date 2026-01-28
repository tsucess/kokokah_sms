<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'level',
        'capacity',
    ];

    /**
     * Get the students in this class.
     */
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}

