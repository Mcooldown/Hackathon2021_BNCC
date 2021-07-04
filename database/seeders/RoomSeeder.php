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
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Full AC'
            ],
            [
                'accomodation_id' => 3,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 4,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Cheap and safe'
            ],
            [
                'accomodation_id' => 3,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 500000,
                'description' => 'Full services'
            ],
            [
                'accomodation_id' => 4,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 500000,
                'description' => 'Full Furnish'
            ]

            ,
            [
                'accomodation_id' => 5,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 6,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Cheap and safe'
            ],
            [
                'accomodation_id' => 7,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 550000,
                'description' => 'Full services'
            ],
            [
                'accomodation_id' => 8,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 800000,
                'description' => 'Full Furnish'
            ],
            [
                'accomodation_id' => 9,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 700000,
                'description' => 'Full Furnish'
            ]

            ,
            [
                'accomodation_id' => 10,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 350000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 11,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 450000,
                'description' => 'Cheap and safe'
            ],
            [
                'accomodation_id' => 12,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 250000,
                'description' => 'Full services'
            ]
            ,
            [
                'accomodation_id' => 3,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Full AC'
            ],
            [
                'accomodation_id' => 4,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 5,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Cheap and safe'
            ],
            [
                'accomodation_id' => 6,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 500000,
                'description' => 'Full services'
            ],
            [
                'accomodation_id' => 7,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 500000,
                'description' => 'Full Furnish'
            ],
            [
                'accomodation_id' => 8,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 9,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Cheap and safe'
            ],
            [
                'accomodation_id' => 10,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 550000,
                'description' => 'Full services'
            ],
            [
                'accomodation_id' => 11,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 800000,
                'description' => 'Full Furnish'
            ],
            [
                'accomodation_id' => 12,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 700000,
                'description' => 'Full Furnish'
            ],
            [
                'accomodation_id' => 2,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 350000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 3,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 450000,
                'description' => 'Cheap and safe'
            ],
            [
                'accomodation_id' => 4,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 250000,
                'description' => 'Full services'
            ]
            ,
            [
                'accomodation_id' => 13,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Full AC'
            ],
            [
                'accomodation_id' => 14,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 15,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Cheap and safe'
            ],
            [
                'accomodation_id' => 16,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 500000,
                'description' => 'Full services'
            ],
            [
                'accomodation_id' => 17,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 500000,
                'description' => 'Full Furnish'
            ],
            [
                'accomodation_id' => 18,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 19,
                'type' => 'Luxury',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Luxury and Comfy'
            ],
            [
                'accomodation_id' => 20,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 550000,
                'description' => 'Full services'
            ],
            [
                'accomodation_id' => 21,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 800000,
                'description' => 'Full Furnish'
            ],
            [
                'accomodation_id' => 13,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 700000,
                'description' => 'Full Furnish'
            ],
            [
                'accomodation_id' => 14,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 350000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 15,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 450000,
                'description' => 'Cheap and safe'
            ],
            [
                'accomodation_id' => 16,
                'type' => 'Superior',
                'photo' => 'superior_1.jpg',
                'slot' => 100,
                'price' => 250000,
                'description' => 'Full services'
            ],
            [
                'accomodation_id' => 17,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Full AC'
            ],
            [
                'accomodation_id' => 18,
                'type' => 'Luxury',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Full AC'
            ],
            [
                'accomodation_id' => 19,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Great services and good protocol'
            ],
            [
                'accomodation_id' => 20,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 100,
                'price' => 300000,
                'description' => 'Full AC'
            ],
            [
                'accomodation_id' => 21,
                'type' => 'Standard',
                'photo' => 'standard_1.jpg',
                'slot' => 300,
                'price' => 500000,
                'description' => 'Full AC'
            ],
        ]);
    }
}
