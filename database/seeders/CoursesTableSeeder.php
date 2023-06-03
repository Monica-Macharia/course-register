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
           ],
           [
            'name' => 'Javascript',
            'teacher_name' => 'Kazito',
            'total_hours' => 10,
           ],[
            'name' => 'SQL',
            'teacher_name' => 'Akisha',
            'total_hours' => 30,
           ],
           [
            'name' => 'React',
            'teacher_name' => 'Zarita',
            'total_hours' => 50,
           ],[
            'name' => 'Express',
            'teacher_name' => 'Katilo',
            'total_hours' => 40,
           ],
           [
            'name' => 'Vue',
            'teacher_name' => 'Asimu',
            'total_hours' => 20,
           ],[
            'name' => 'Python',
            'teacher_name' => 'Kaka',
            'total_hours' => 50,
           ]
        ];
       
       
        DB::table('courses')->insert($courses);
    }
}
