<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accomodations')->insert([
            [
                'name' => 'Villa ABC',
                'category_id' => 1,
                'photo' => 'villa_abc.jpg',
                'city_id' => 1,
                'address' => 'Jalan Sejahtera No.2',
                'health_protocol_fee' => 100000,
            ],
            [
                'name' => 'ABC Apartement',
                'category_id' => 2,
                'photo' => 'abc_apartement.jpg',
                'city_id' => 1,
                'address' => 'Jalan Sejahtera No.50',
                'health_protocol_fee' => 150000,
            ],
            [
                'name' => 'ABC Glamping',
                'category_id' => 3,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 2,
                'address' => 'Jalan Raya Puncak Gunung No.2000',
                'health_protocol_fee' => 200000,
            ]
        ]);
    }
}
