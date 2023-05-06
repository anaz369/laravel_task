<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tbl_parent_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\parentTable::create([
            'Name' => 'John',
            'Email' => 'John@gmail.com',
        ]);
        \App\Models\parentTable::create([
            'Name' => 'Tom',
            'Email' => 'Tom2@gmail.com',
        ]);
        \App\Models\parentTable::create([
            'Name' => 'Joy',
            'Email' => 'bin@jon.com',
        ]);
        \App\Models\parentTable::create([
            'Name' => 'Adam',
            'Email' => 'Adam@yahoo.com',
        ]);
        \App\Models\parentTable::create([
            'Name' => 'Dennis',
            'Email' => 'Den@gmail.com',
        ]);


    }

}

