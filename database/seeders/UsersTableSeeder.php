<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            //Manager
            [
                'name' => 'Manager',
                'username' => 'manager',
                'email' => 'manager@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'manager',
                'status' => 'active',
            ],
            //Staff
            [
                'name' => 'Staff',
                'username' => 'staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('222'),
                'role' => 'staff',
                'status' => 'active',
            ],
            //Users
            [
                'name' => 'Customer',
                'username' => 'customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('333'),
                'role' => 'customer',
                'status' => 'active',
            ],

        ]);
    }
}
