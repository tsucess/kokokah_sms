<?php

namespace Database\Seeders;

use App\Models\AcademicSession;
use Illuminate\Database\Seeder;

class AcademicSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademicSession::create([
            'name' => '2024/2025',
            'term' => 'Second Term',
            'start_date' => '2025-01-06',
            'end_date' => '2025-04-04',
            'is_active' => true,
        ]);

        AcademicSession::create([
            'name' => '2024/2025',
            'term' => 'First Term',
            'start_date' => '2024-09-09',
            'end_date' => '2024-12-13',
            'is_active' => false,
        ]);

        AcademicSession::create([
            'name' => '2024/2025',
            'term' => 'Third Term',
            'start_date' => '2025-04-21',
            'end_date' => '2025-07-18',
            'is_active' => false,
        ]);
    }
}

