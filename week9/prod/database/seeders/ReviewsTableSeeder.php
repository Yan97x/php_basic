<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_name' => 'Fred',
            'product_rating' => 5,
            'review_content' => 'It is very easy to use!',
            'product_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'user_name' => 'Member',
            'product_rating' => 4,
            'review_content' => 'It is very easy to use!',
            'product_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'user_name' => 'Bob',
            'product_rating' => 2,
            'review_content' => 'It is very easy to use!',
            'product_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'user_name' => 'Cara',
            'product_rating' => 1,
            'review_content' => 'It is very easy to use!',
            'product_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'user_name' => 'Cara',
            'product_rating' => 4,
            'review_content' => 'It is very easy to use!',
            'product_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'user_name' => 'Moderator',
            'product_rating' => 5,
            'review_content' => 'It is very easy to use!',
            'product_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'user_name' => 'Chris',
            'product_rating' => 5,
            'review_content' => 'It is very easy to use!',
            'product_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
