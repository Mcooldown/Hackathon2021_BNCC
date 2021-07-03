<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            [
                'star' => 5,
                'accomodation_id' => 1,
                'user_id' => 3,
                'comment' => 'very good',
                'created_at' => '2021-07-04 00:00:00.000000',
            ],
            [
                'star' => 2,
                'accomodation_id' => 2,
                'user_id' => 3,
                'comment' => 'very bad',
                'created_at' => '2021-07-04 00:00:00.000000',
            ],
            [
                'star' => 4,
                'accomodation_id' => 3,
                'user_id' => 3,
                'comment' => 'good hospitality',
                'created_at' => '2021-07-04 00:00:00.000000',
            ],

            [
                'star' => 3,
                'accomodation_id' => 4,
                'user_id' => 1,
                'comment' => 'lumayan okee',
                'created_at' => '2021-07-04 00:00:00.000000',
            ],
            [
                'star' => 3,
                'accomodation_id' => 5,
                'user_id' => 2,
                'comment' => 'keren',
                'created_at' => '2021-07-04 00:00:00.000000',
            ],
            [
                'star' => 2,
                'accomodation_id' => 6,
                'user_id' => 3,
                'comment' => 'okee bang',
                'created_at' => '2021-07-04 00:00:00.000000',
            ]
        ]);
    }
}
