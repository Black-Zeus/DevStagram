<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Administrador",
            'username' => "admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('acceso2020'),
        ]);
        
        DB::table('users')->insert([
            'name' => "usuario01",
            'username' => "user01",
            'email' => 'user01@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        DB::table('users')->insert([
            'name' => "usuario02",
            'username' => "user02",
            'email' => 'user02@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
