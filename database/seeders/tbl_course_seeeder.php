<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tbl_course_seeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\course::create([
            'Course_name' => 'English',
            'Dept' => 'English',
        ]);
        \App\Models\course::create([
            'Course_name' => 'Mathematics',
            'Dept' => 'Maths',
        ]);
        \App\Models\course::create([
            'Course_name' => 'Science',
            'Dept' => 'Science',
        ]);
        \App\Models\course::create([
            'Course_name' => 'Economics',
            'Dept' => 'Science',
        ]);
    }
}
