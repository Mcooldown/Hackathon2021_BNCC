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
                'city' => 'Jakarta',
                'address' => 'Jalan Sejahtera No.2'
            ],
            [
                'name' => 'ABC Apartement',
                'category_id' => 2,
                'photo' => 'abc_apartement.jpg',
                'city' => 'Jakarta',
                'address' => 'Jalan Sejahtera No.50'
            ],
            [
                'name' => 'ABC Glamping',
                'category_id' => 3,
                'photo' => 'abc_glamping.jpg',
                'city' => 'Bogor',
                'address' => 'Jalan Raya Puncak Gunung No.2000',
            ]
        ]);
    }
}
