<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon; 

class SeedWatchesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('watches')->insert([
        	'watch_id' => 1, 
        	'SKU' => 22567959,
        	'watch_name' => 'Bamity', 
        	'in_stock' => 1, 
        	'quantity' => 26, 
        	'price' => 1399.99, 
        	'cost' => 1799.99, 
        	'material' => 'gold', 
        	'main_color' => 'gold', 
        	'movement' => 'quartz', 
        	'gender' => 'male', 
        	'category_id' => 2, 
        	'diameter' => 33,
        	'strap_length' => '184mm', 
        	'strap_width' => '18mm', 
        	'weight' => '122g', 
        	'water_resistant' => '3 atm', 
        	'cover_img' => 'bamity.jpg', 
        	'short_description' => '', 
        	'long_description' => '', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 
    }
}
