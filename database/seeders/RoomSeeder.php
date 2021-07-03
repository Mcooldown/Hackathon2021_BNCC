<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'accomodation_id' => 1,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 500000,
                'description' => 'Full AC'
            ],
            [
                'accomodation_id' => 1,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Full AC'
            ],
            [
                'accomodation_id' => 2,
                'type' => 'Standard',
                'photo' => 'standard_2.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Full AC'
            ]
        ]);
    }
}
