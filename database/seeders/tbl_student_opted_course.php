<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tbl_student_opted_course extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\student_opted_course::create([
            'student_id' => 1,
            'course_id' => 1,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 1,
            'course_id' => 4,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 2,
            'course_id' => 1,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 3,
            'course_id' => 2,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 3,
            'course_id' => 4,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 4,
            'course_id' => 2,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 4,
            'course_id' => 1,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 4,
            'course_id' => 3,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 5,
            'course_id' => 3,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 6,
            'course_id' => 2,
            'is_active'=>0,
        ]);
        \App\Models\student_opted_course::create([
            'student_id' => 7,
            'course_id' => 1,
            'is_active'=>0,
        ]);
    }
}
