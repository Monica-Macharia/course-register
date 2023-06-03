<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Two initial courses to be present in the DB in addition to fake data from factory.
       $courses = [
           [
            'name' => 'Ruby on Rails',
            'teacher_name' => 'Zari',
            'total_hours' => 50,
           ],[
            'name' => 'Node',
            'teacher_name' => 'Zobuto',
            'total_hours' => 70,
           ]
        ];
       
       
        DB::table('courses')->insert($courses);
    }
}
