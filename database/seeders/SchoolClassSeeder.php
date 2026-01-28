<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            ['code' => 'NUR1', 'name' => 'Nursery 1', 'level' => 'Nursery', 'capacity' => 25],
            ['code' => 'NUR2', 'name' => 'Nursery 2', 'level' => 'Nursery', 'capacity' => 25],
            ['code' => 'PRI1', 'name' => 'Primary 1', 'level' => 'Primary', 'capacity' => 30],
            ['code' => 'PRI2', 'name' => 'Primary 2', 'level' => 'Primary', 'capacity' => 30],
            ['code' => 'PRI3', 'name' => 'Primary 3', 'level' => 'Primary', 'capacity' => 30],
            ['code' => 'PRI4', 'name' => 'Primary 4', 'level' => 'Primary', 'capacity' => 30],
            ['code' => 'PRI5', 'name' => 'Primary 5', 'level' => 'Primary', 'capacity' => 30],
            ['code' => 'PRI6', 'name' => 'Primary 6', 'level' => 'Primary', 'capacity' => 30],
            ['code' => 'JSS1A', 'name' => 'Junior Secondary School 1A', 'level' => 'JSS', 'capacity' => 35],
            ['code' => 'JSS1B', 'name' => 'Junior Secondary School 1B', 'level' => 'JSS', 'capacity' => 35],
            ['code' => 'JSS2A', 'name' => 'Junior Secondary School 2A', 'level' => 'JSS', 'capacity' => 35],
            ['code' => 'JSS2B', 'name' => 'Junior Secondary School 2B', 'level' => 'JSS', 'capacity' => 35],
            ['code' => 'JSS3A', 'name' => 'Junior Secondary School 3A', 'level' => 'JSS', 'capacity' => 35],
            ['code' => 'JSS3B', 'name' => 'Junior Secondary School 3B', 'level' => 'JSS', 'capacity' => 35],
            ['code' => 'SSS1', 'name' => 'Senior Secondary School 1', 'level' => 'SSS', 'capacity' => 40],
            ['code' => 'SSS2', 'name' => 'Senior Secondary School 2', 'level' => 'SSS', 'capacity' => 40],
            ['code' => 'SSS3', 'name' => 'Senior Secondary School 3', 'level' => 'SSS', 'capacity' => 40],
        ];

        foreach ($classes as $class) {
            SchoolClass::create($class);
        }
    }
}

