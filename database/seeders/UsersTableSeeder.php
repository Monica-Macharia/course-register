<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //two initial users for logging in tests
        $users = [
            [
             'email' => 'testuser1@gmail.com',
             'password' => 123456789,
            ],[
                'email' => 'testuser2@gmail.com',
                'password' => 1234567890,
            ]
         ];
        
        
         DB::table('users')->insert($users);
    }
}
