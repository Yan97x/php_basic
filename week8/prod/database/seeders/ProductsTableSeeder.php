<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'iPhone 20',
            'price' => 6009,
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('products')->insert([
            'name' => 'Note 21',
            'price' => 5674,
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        
        DB::table('products')->insert([
            'name' => 'Surface Pro',
            'price' => 1234,
            'manufacturer_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('products')->insert([
            'name' => 'iPod Pro',
            'price' => 8754,
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
