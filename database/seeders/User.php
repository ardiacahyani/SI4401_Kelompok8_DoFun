<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'hp' => '01',
            'password' => Hash::make('admin'),
            'role' => 'ADMIN'
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'username' => 'user',
            'hp' => '01',
            'password' => Hash::make('user'),
            'role' => 'USER'
        ]);
    }
}
