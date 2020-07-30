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
        	'short_description' => 'The beatifully crafted Bamity and designed to be apart of our luxury classics collection.', 
        	'long_description' => 'Created in 1945, the Bamity was the first self-winding waterproof chronometer wristwatch to display the date in a window at 3 o’clock on the dial – hence its name. With its timeless aesthetics, functions and rich history, the Bamity is a watchmaking icon and one of the brand’s most recognizable watches.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([
        	'watch_id' => 2, 
        	'SKU' => 22567950,
        	'watch_name' => 'Vagram', 
        	'in_stock' => 1, 
        	'quantity' => 89, 
        	'price' => 1699.99, 
        	'cost' => 2100.99, 
        	'material' => 'titanium', 
        	'main_color' => 'silver', 
        	'movement' => 'quartz', 
        	'gender' => 'male', 
        	'category_id' => 5, 
        	'diameter' => 29,
        	'strap_length' => '180mm', 
        	'strap_width' => '21mm', 
        	'weight' => '132g', 
        	'water_resistant' => '10 atm', 
        	'cover_img' => 'vagram.jpg', 
        	'short_description' => 'The beatifully crafted vagram and designed to be apart of our quartz classics collection.', 
        	'long_description' => 'Created in 2011, the Vagram was the first titanium wristwatch to display a customized name in the back of the dial. With its timeless aesthetics, functions and rich history, the Vagram is a watchmaking icon and one of the most trendiest look for today.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([
        	'watch_id' => 3, 
        	'SKU' => 22567900,
        	'watch_name' => 'Quo Lux', 
        	'in_stock' => 1, 
        	'quantity' => 12, 
        	'price' => 599.99, 
        	'cost' => 999.99, 
        	'material' => 'stainless steel', 
        	'main_color' => 'black', 
        	'movement' => 'quartz', 
        	'gender' => 'male', 
        	'category_id' => 2, 
        	'diameter' => 29,
        	'strap_length' => '182mm', 
        	'strap_width' => '23mm', 
        	'weight' => '92g', 
        	'water_resistant' => '3 atm', 
        	'cover_img' => 'quolux.jpg', 
        	'short_description' => 'The beatifully crafted Quo Lux and designed to be apart of our stainless steel classics collection.', 
        	'long_description' => 'Created in 2020, the Vagram was the first stainless wristwatch to be waterproof within 30 meters of depth. With its seemless and glass-like aesthetics, the Quo Lux is both a luxiourious and sporty catch.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([
        	'watch_id' => 4, 
        	'SKU' => 22567000,
        	'watch_name' => 'Alphazap', 
        	'in_stock' => 1, 
        	'quantity' => 200, 
        	'price' => 199.99, 
        	'cost' => 299.99, 
        	'material' => 'silver', 
        	'main_color' => 'silver', 
        	'movement' => 'mechanical', 
        	'gender' => 'male', 
        	'category_id' => 1, 
        	'diameter' => 30,
        	'strap_length' => '182mm', 
        	'strap_width' => '20mm', 
        	'weight' => '45g', 
        	'water_resistant' => '3 atm', 
        	'cover_img' => 'alphazap.jpg', 
        	'short_description' => 'Heir to the original model, the Alphazap was unveiled in 1982, with a new movement ensuring ease of use.', 
        	'long_description' => 'Designed to show the time in two different time zones simultaneously, the GMT-Master, launched in 1955, was originally developed as a navigation instrument for professionals criss-crossing the globe.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([
        	'watch_id' => 5, 
        	'SKU' => 22567100,
        	'watch_name' => 'Transcof', 
        	'in_stock' => 1, 
        	'quantity' => 20, 
        	'price' => 1999.99, 
        	'cost' => 2989.99, 
        	'material' => 'carbon fibre', 
        	'main_color' => 'silver', 
        	'movement' => 'quartz', 
        	'gender' => 'male', 
        	'category_id' => 3, 
        	'diameter' => 33,
        	'strap_length' => '182mm', 
        	'strap_width' => '20mm', 
        	'weight' => '45g', 
        	'water_resistant' => '3 atm', 
        	'cover_img' => 'alphazap.jpg', 
        	'short_description' => 'The Oyster Perpetual Transcof was launched in 1955', 
        	'long_description' => 'It even became the official watch of Pan American World Airways – better known as Pan Am – then the most prominent American intercontinental airline.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 


    }
}
