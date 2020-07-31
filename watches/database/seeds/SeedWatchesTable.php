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
    	// first 5 records are all gender: male 

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

        // next 5 are all gender: female 

        DB::table('watches')->insert([ 
        	'SKU' => 22567900,
        	'watch_name' => 'Cardify', 
        	'in_stock' => 1, 
        	'quantity' => 20, 
        	'price' => 1999.99, 
        	'cost' => 2989.99, 
        	'material' => 'rosegold', 
        	'main_color' => 'rosegold', 
        	'movement' => 'quartz', 
        	'gender' => 'female', 
        	'category_id' => 1, 
        	'diameter' => 27,
        	'strap_length' => '165mm', 
        	'strap_width' => '25mm', 
        	'weight' => '95g', 
        	'water_resistant' => '13 atm', 
        	'cover_img' => 'cardify.jpg', 
        	'short_description' => 'Launch of the Cardify II. The new movement allowed the hour hand to be set independently.', 
        	'long_description' => 'Over the years, the insert has been made available in different colour combinations. Initially made from Plexiglas, it was replaced by anodized rosegold lauminum in 1959 and high-technology ceramic in 2020', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
        	'SKU' => 22567980,
        	'watch_name' => 'Bezeld III', 
        	'in_stock' => 1, 
        	'quantity' => 20, 
        	'price' => 1999.99, 
        	'cost' => 2989.99, 
        	'material' => 'gold', 
        	'main_color' => 'gold', 
        	'movement' => 'mechanical', 
        	'gender' => 'female', 
        	'category_id' => 3, 
        	'diameter' => 27,
        	'strap_length' => '160mm', 
        	'strap_width' => '19mm', 
        	'weight' => '99g', 
        	'water_resistant' => '5 atm', 
        	'cover_img' => 'bezeld.jpg', 
        	'short_description' => 'In 2005, Bezeld III replaced the Rolex and inserted in aluminium with gold – a further innovation.', 
        	'long_description' => 'Since then– for optimal legibility – the numerals and graduations have been moulded into the ceramic and then coated with a thin layer of gold or platinum via PVD (Physical Vapour Deposition). ', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
        	'SKU' => 22567980,
        	'watch_name' => 'Viva', 
        	'in_stock' => 1, 
        	'quantity' => 21, 
        	'price' => 678.99, 
        	'cost' => 1211.99, 
        	'material' => 'stainless steel', 
        	'main_color' => 'silver', 
        	'movement' => 'quartz', 
        	'gender' => 'female', 
        	'category_id' => 5, 
        	'diameter' => 27,
        	'strap_length' => '150mm', 
        	'strap_width' => '11mm', 
        	'weight' => '111g', 
        	'water_resistant' => '10 atm', 
        	'cover_img' => 'viva.jpg', 
        	'short_description' => 'The Viva\'s unidirectional rotatable bezel is key to the functionality of the watch. Its engraved 60-minute graduation allows a diver to monitor diving time and decompression stops accurately and therefore safely..', 
        	'long_description' => 'Manufactured by PseudoClass from a hard, corrosion-resistant stainless steel, the Cerachrom Viva insert is virtually scratchproof and its colour is unaffected by ultraviolet rays, seawater or water that is chlorinated.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
        	'SKU' => 22561980,
        	'watch_name' => 'Flexidy', 
        	'in_stock' => 1, 
        	'quantity' => 201, 
        	'price' => 1299.99, 
        	'cost' => 1811.99, 
        	'material' => 'titanium', 
        	'main_color' => 'silver', 
        	'movement' => 'mechanical', 
        	'gender' => 'female', 
        	'category_id' => 3, 
        	'diameter' => 31,
        	'strap_length' => '179mm', 
        	'strap_width' => '24mm', 
        	'weight' => '129g', 
        	'water_resistant' => '0 atm', 
        	'cover_img' => 'flexidy.jpg', 
        	'short_description' => 'Scratch-proof titanium had never existed before, so TechWatch invented it.', 
        	'long_description' => 'Flexidy is a gorgeous model in both strength and simplicity. Developed and patented by the Manufacture, Magic titanium is the first and only 2K gold alloy in the world that perfectly withstands scratches, even with an extremely active lifestyle. It maintains its beauty, shine and polished appearance over time. A true revolution in the world of precious materials.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
        	'SKU' => 22561980,
        	'watch_name' => 'Daltfresh', 
        	'in_stock' => 1, 
        	'quantity' => 201, 
        	'price' => 2299.99, 
        	'cost' => 4811.99, 
        	'material' => 'gold', 
        	'main_color' => 'gold', 
        	'movement' => 'quartz', 
        	'gender' => 'female', 
        	'category_id' => 2, 
        	'diameter' => 29,
        	'strap_length' => '175mm', 
        	'strap_width' => '25mm', 
        	'weight' => '145g', 
        	'water_resistant' => '2 atm', 
        	'cover_img' => 'daltfresh.jpg', 
        	'short_description' => 'The Daltfresh in 18 ct Everose gold with an Oyster bracelet.', 
        	'long_description' => 'This model features a gorgeous dial and a gold and black Cerachrom bezel. Designed to show the time in two different time zones simultaneously during intercontinental flights, the Daltfresh has come to be recognized for its robustness and versatile appearance.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        // next 5 will be all material: silicone rubber 
        DB::table('watches')->insert([ 
            'SKU' => 23561980,
            'watch_name' => 'Asoka', 
            'in_stock' => 1, 
            'quantity' => 1222, 
            'price' => 219.99, 
            'cost' => 411.99, 
            'material' => 'silicone rubber', 
            'main_color' => 'blue', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 1, 
            'diameter' => 28,
            'strap_length' => '195mm', 
            'strap_width' => '25mm', 
            'weight' => '15g', 
            'water_resistant' => '19 atm', 
            'cover_img' => 'asoka.jpg', 
            'short_description' => 'The Asoka watch bracelet refined and upgraded.', 
            'long_description' => 'The Asoka model conveys sporty and elegant at the same time while providing waterproof for over 19 meters below water. Our latest watch made of silicone rubber to provide a lightweight and practical everyday watch', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
            'SKU' => 20361980,
            'watch_name' => 'Opela', 
            'in_stock' => 1, 
            'quantity' => 92, 
            'price' => 211.99, 
            'cost' => 421.99, 
            'material' => 'silicone rubber', 
            'main_color' => 'white', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 1, 
            'diameter' => 28,
            'strap_length' => '185mm', 
            'strap_width' => '24mm', 
            'weight' => '16g', 
            'water_resistant' => '19 atm', 
            'cover_img' => 'opela.jpg', 
            'short_description' => 'The Opela 2020 series introduces a blend of critical and robust complexity and simplicity.', 
            'long_description' => 'The Opela model features a smart feature that allows for phone calls, music, and more. Our latest watch made of silicone rubber to provide a lightweight and practical everyday watch', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
            'SKU' => 20001980,
            'watch_name' => 'Wrapsafe', 
            'in_stock' => 1, 
            'quantity' => 9, 
            'price' => 249.99, 
            'cost' => 449.99, 
            'material' => 'silicone rubber', 
            'main_color' => 'black', 
            'movement' => 'mechanical', 
            'gender' => 'female', 
            'category_id' => 1, 
            'diameter' => 25,
            'strap_length' => '165mm', 
            'strap_width' => '20mm', 
            'weight' => '19g', 
            'water_resistant' => '22 atm', 
            'cover_img' => 'wrapsafe.jpg', 
            'short_description' => 'The Wrapsafe 2020 series provides comfort and security.', 
            'long_description' => 'The Wrapsafe model is meant for outdoor activities, meant for everyday use, meant for it to be tossed and turned and bodied. Through and through, although the Wrapsafe is lightweight, do not let it fool you into thinking it won\'t last.  Our second latest watch made of silicone rubber to provide a lightweight and practical everyday watch', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
            'SKU' => 20001985,
            'watch_name' => 'Bitwold', 
            'in_stock' => 1, 
            'quantity' => 9, 
            'price' => 1249.99, 
            'cost' => 1449.99, 
            'material' => 'silicone rubber', 
            'main_color' => 'pink', 
            'movement' => 'mechanical', 
            'gender' => 'female', 
            'category_id' => 1, 
            'diameter' => 25,
            'strap_length' => '165mm', 
            'strap_width' => '21mm', 
            'weight' => '29g', 
            'water_resistant' => '30 atm', 
            'cover_img' => 'bitwold.jpg', 
            'short_description' => 'Hight quality silicone Material, very soft and durable enough to avoid the slipping-off problem,sweat-resistant and waterproof,Perfect fit for sport wear.', 
            'long_description' => 'The Bitwold model is meant for outdoor activities, meant for everyday use, meant for it to be tossed and turned and bodied. Through and through, although the Wrapsafe is lightweight, do not let it fool you into thinking it won\'t last.  Our third latest watch made of silicone rubber to provide a lightweight and practical everyday watch', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
            'SKU' => 20001911,
            'watch_name' => 'Tresom', 
            'in_stock' => 1, 
            'quantity' => 771, 
            'price' => 299.99, 
            'cost' => 449.99, 
            'material' => 'silicone rubber', 
            'main_color' => 'white', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 1, 
            'diameter' => 25,
            'strap_length' => '199mm', 
            'strap_width' => '25mm', 
            'weight' => '29g', 
            'water_resistant' => '30 atm', 
            'cover_img' => 'tresom.jpg', 
            'short_description' => 'This is a genuine TechWatch Tresom silicone rubber watch strap.', 
            'long_description' => 'POLISHED AND SATIN-FINISHED LIGHT BLUE automatic Tresom. TechWatch\'s strength resides in its very clear identity - the art of fusion - this unique ability to create timepieces which combine tradition and innovation', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 


        // next 5 will be all material: silver 

        // next 5 will be all material: gold 

        // next 5 will be all category: smart watch 

        // next 5 will be all category: luxury watch 

        // next 5 will be all category: mechanical watch 

        // next 5 will be all category: digital watch 

        // next 5 will be all category: quartz


    }
}
