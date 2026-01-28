<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\SchoolClass;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $firstNames = ['John', 'Mary', 'David', 'Sarah', 'Michael', 'Grace', 'Emmanuel', 'Fatima', 'Peter', 'Blessing'];
        $lastNames = ['Adewale', 'Okafor', 'Bello', 'Ibrahim', 'Eze', 'Akinola', 'Musa', 'Okonkwo', 'Yusuf', 'Nwosu'];
        $guardianNames = ['Rose Akinola', 'James Okafor', 'Amina Bello', 'Paul Eze', 'Ngozi Nwosu', 'Ahmed Musa', 'Chioma Okonkwo', 'Tunde Adewale'];
        
        // Get JSS1A class
        $jss1a = SchoolClass::where('code', 'JSS1A')->first();
        
        if (!$jss1a) {
            $this->command->error('JSS1A class not found. Please run SchoolClassSeeder first.');
            return;
        }

        // Create 70 students for JSS1A
        for ($i = 1; $i <= 70; $i++) {
            Student::create([
                'student_id' => '93' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'first_name' => $firstNames[array_rand($firstNames)],
                'last_name' => $lastNames[array_rand($lastNames)],
                'middle_name' => null,
                'gender' => $i % 2 == 0 ? 'Male' : 'Female',
                'date_of_birth' => now()->subYears(rand(12, 15))->format('Y-m-d'),
                'class_id' => $jss1a->id,
                'parent_guardian_name' => $guardianNames[array_rand($guardianNames)],
                'parent_guardian_phone' => '080' . rand(10000000, 99999999),
                'parent_guardian_email' => null,
                'status' => 'Active',
                'enrollment_date' => '2024-09-09',
            ]);
        }

        // Create some students for other classes
        $otherClasses = SchoolClass::where('code', '!=', 'JSS1A')->take(5)->get();
        
        foreach ($otherClasses as $class) {
            for ($i = 1; $i <= 20; $i++) {
                Student::create([
                    'student_id' => $class->code . str_pad($i, 3, '0', STR_PAD_LEFT),
                    'first_name' => $firstNames[array_rand($firstNames)],
                    'last_name' => $lastNames[array_rand($lastNames)],
                    'middle_name' => null,
                    'gender' => $i % 2 == 0 ? 'Male' : 'Female',
                    'date_of_birth' => now()->subYears(rand(5, 18))->format('Y-m-d'),
                    'class_id' => $class->id,
                    'parent_guardian_name' => $guardianNames[array_rand($guardianNames)],
                    'parent_guardian_phone' => '080' . rand(10000000, 99999999),
                    'parent_guardian_email' => null,
                    'status' => 'Active',
                    'enrollment_date' => '2024-09-09',
                ]);
            }
        }
    }
}

