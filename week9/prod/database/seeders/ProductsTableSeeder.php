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
            'name' => 'iPhone 13',
            'price' => 1347,
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'describe' => 'The iPhone 13 and iPhone 13 mini iterate upon the successful iPhone 12 with new cameras and longer battery life. 
            The notch has been reduced in size, and the rear camera module now sits at a diagonal. 
            In addition, the A15 processor brings more speed and efficiency to every task.',
            'link' => 'https://www.apple.com/au/iphone-13/',
            'user' => 'Chris',
        ]);

        DB::table('products')->insert([
            'name' => 'Note 20',
            'price' => 5674,
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'describe' => 'Note 20 is a big upgrade from note 10, it can help you do a lot for the job by using Bixby, and it is convenient and easy to use.',
            'link' => 'https://www.jbhifi.com.au/collections/mobile-phones/samsung-galaxy-note-20-series',
            'user' => 'Bob',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Surface Pro 7',
            'price' => 1234,
            'manufacturer_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'describe' => 'Surface Pro 7 is good to use',
            'link' => 'https://www.microsoft.com/en-au/d/surface-pro-7/8n17j0m5zzqs',
            'user' => 'Member',
        ]);

        DB::table('products')->insert([
            'name' => 'iPad Pro',
            'price' => 8754,
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            'describe' => 'iPad Pro is very good!',
            'link' => 'https://www.apple.com/au/ipad-pro/',
            'user' => 'Cara',
        ]);
    }
}
