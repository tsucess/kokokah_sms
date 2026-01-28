<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            ['name' => 'English Language', 'code' => 'ENG', 'description' => 'English Language and Literature'],
            ['name' => 'Mathematics', 'code' => 'MATH', 'description' => 'General Mathematics'],
            ['name' => 'Science', 'code' => 'SCI', 'description' => 'Basic Science'],
            ['name' => 'Social Studies', 'code' => 'SST', 'description' => 'Social Studies'],
            ['name' => 'Civic Education', 'code' => 'CIV', 'description' => 'Civic Education'],
            ['name' => 'Computer Studies', 'code' => 'COM', 'description' => 'Computer Studies'],
            ['name' => 'Physical Education', 'code' => 'PHE', 'description' => 'Physical and Health Education'],
            ['name' => 'Creative Arts', 'code' => 'ART', 'description' => 'Creative and Cultural Arts'],
            ['name' => 'French', 'code' => 'FRE', 'description' => 'French Language'],
            ['name' => 'Yoruba', 'code' => 'YOR', 'description' => 'Yoruba Language'],
            ['name' => 'Igbo', 'code' => 'IGB', 'description' => 'Igbo Language'],
            ['name' => 'Hausa', 'code' => 'HAU', 'description' => 'Hausa Language'],
            ['name' => 'Agricultural Science', 'code' => 'AGR', 'description' => 'Agricultural Science'],
            ['name' => 'Home Economics', 'code' => 'HEC', 'description' => 'Home Economics'],
            ['name' => 'Business Studies', 'code' => 'BUS', 'description' => 'Business Studies'],
        ];

        foreach ($subjects as $subject) {
            Subject::create($subject);
        }
    }
}

