<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'role' => 'OTA',
                'name' => 'Antavaya',
                'ota_name' => 'Antavaya',
                'email' => 'antavaya@gmail.com',
                'password' => Hash::make('abcd'),
            ],
            [
                'role' => 'ADMIN',
                'name' => 'Bambang',
                'email' => 'bambang@gmail.com',
                'password' => Hash::make('abcd'),
            ],
            [
                'role' => 'USER',
                'name' => 'Brian',
                'email' => 'brian@gmail.com',
                'password' => Hash::make('abcd'),
            ]
        ]);
    }
}
