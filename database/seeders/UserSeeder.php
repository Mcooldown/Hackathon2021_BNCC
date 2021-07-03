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
                'phone_number' => '123894728934',
                'balance' => 0,
            ],
            [
                'role' => 'ADMIN',
                'name' => 'Bambang',
                'ota_name' => NULL,
                'email' => 'bambang@gmail.com',
                'password' => Hash::make('abcd'),
                'phone_number' => '123894728123',
                'balance' => 0,
            ],
            [
                'role' => 'USER',
                'name' => 'Brian',
                'ota_name' => NULL,
                'email' => 'brian@gmail.com',
                'password' => Hash::make('abcd'),
                'phone_number' => '1232222224',
                'balance' => 0,
            ]
        ]);
    }
}
