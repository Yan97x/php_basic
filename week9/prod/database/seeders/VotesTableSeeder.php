<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('votes')->insert([
            'user' => 'Bob',
            'thumb_up' => 1,
            'thumb_down' => 1,
            'review_id' => 1,
        ]);
        DB::table('votes')->insert([
            'user' => 'Member',
            'thumb_up' => 0,
            'thumb_down' => 0,
            'review_id' => 2,
        ]);
        DB::table('votes')->insert([
            'user' => 'Cara',
            'thumb_up' => 0,
            'thumb_down' => 0,
            'review_id' => 3,
        ]);
        DB::table('votes')->insert([
            'user' => 'Chris',
            'thumb_up' => 0,
            'thumb_down' => 0,
            'review_id' => 4,
        ]);
        DB::table('votes')->insert([
            'user' => 'Moderator',
            'thumb_up' => 0,
            'thumb_down' => 0,
            'review_id' => 5,
        ]);
        DB::table('votes')->insert([
            'user' => 'Bob',
            'thumb_up' => 0,
            'thumb_down' => 0,
            'review_id' => 6,
        ]);
        DB::table('votes')->insert([
            'user' => 'Bob',
            'thumb_up' => 0,
            'thumb_down' => 0,
            'review_id' => 7,
        ]);
    }
}
