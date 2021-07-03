<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recommendations')->insert([
            [
                'accomodation_id' => 1,
                'ota_id' => 1,
                'comment' => 'great',
            ],
            [
                'accomodation_id' => 1,
                'ota_id' => 1,
                'comment' => 'good scenery',
            ],
            [
                'accomodation_id' => 2,
                'ota_id' => 1,
                'comment' => 'very affordable',
            ],
            [
                'accomodation_id' => 3,
                'ota_id' => 1,
                'comment' => 'very cheap',
            ]
        ]);
    }
}
