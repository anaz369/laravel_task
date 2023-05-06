<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tbl_student extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\student::create([
            'Name' => 'Anju',
            'Fk_parent_id'=>1,
            'gender'=>'F',
        ]);
        \App\Models\student::create([
            'Name' => 'Alex',
            'Fk_parent_id'=>2,
            'gender'=>'M',
        ]);
        \App\Models\student::create([
            'Name' => 'Rols',
            'Fk_parent_id'=>2,
            'gender'=>'M',
        ]);
        \App\Models\student::create([
            'Name' => 'David',
            'Fk_parent_id'=>3,
            'gender'=>'M',
        ]);
        \App\Models\student::create([
            'Name' => 'Abi',
            'Fk_parent_id'=>4,
            'gender'=>'M',
        ]);
        \App\Models\student::create([
            'Name' => 'Jinu',
            'Fk_parent_id'=>5,
            'gender'=>'F',
        ]);
        \App\Models\student::create([
            'Name' => 'Aju',
            'Fk_parent_id'=>5,
            'gender'=>'M',
        ]);
    }
}



