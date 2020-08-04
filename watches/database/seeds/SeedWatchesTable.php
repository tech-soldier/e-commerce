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
        	'cover_img' => 'product1.jpg', 
        	'short_description' => 'The beatifully crafted Bamity and designed to be apart of our luxury classics collection.', 
        	'long_description' => 'Created in 1945, the Bamity was the first self-winding waterproof chronometer wristwatch to display the date in a window at 3 o’clock on the dial – hence its name. With its timeless aesthetics, functions and rich history, the Bamity is a watchmaking icon and one of the brand’s most recognizable watches.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([
        	
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

        DB::table('watches')->insert([ 
         
            'SKU' => 20001911,
            'watch_name' => 'Duobam', 
            'in_stock' => 1, 
            'quantity' => 755, 
            'price' => 299.99, 
            'cost' => 449.99, 
            'material' => 'silver', 
            'main_color' => 'black', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 1, 
            'diameter' => 25,
            'strap_length' => '180mm', 
            'strap_width' => '25mm', 
            'weight' => '129g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'duobam.jpg', 
            'short_description' => 'This is a real silver TechWatch Duobam series presenting you with An unparalleled power reserve of Meca-10, Tourbillon and MP-11 calibers. A revolutionary motor approach with 11 MP-05 barrels and 50-day power reserve.', 
            'long_description' => 'In its Art of Fusion, Duobam carries out a perfect symbiosis between functionality, architecture and design.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
       
            'SKU' => 20071911,
            'watch_name' => 'Keylex I', 
            'in_stock' => 1, 
            'quantity' => 55, 
            'price' => 2199.99, 
            'cost' => 2449.99, 
            'material' => 'silver', 
            'main_color' => 'silver', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 1, 
            'diameter' => 29,
            'strap_length' => '180mm', 
            'strap_width' => '25mm', 
            'weight' => '149g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'keylex.jpg', 
            'short_description' => 'The first 100% TechWatch House movement, the Keylex I caliber has designed a new face for the quartz chronograph.', 
            'long_description' => 'A 10-day power reserve and atypical display with rack and pinion. Sapphire with Anti-reflective Treatment', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
       
            'SKU' => 29301911,
            'watch_name' => 'Veribet', 
            'in_stock' => 1, 
            'quantity' => 55, 
            'price' => 3199.99, 
            'cost' => 3449.99, 
            'material' => 'silver', 
            'main_color' => 'gold', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 1, 
            'diameter' => 33,
            'strap_length' => '186mm', 
            'strap_width' => '25mm', 
            'weight' => '149g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'veribet.jpg', 
            'short_description' => 'Transparency, radiance and robustness in unique shadesouse movement, the Keylex I caliber has designed a new face for the quartz chronograph.', 
            'long_description' => 'POLISHED GOLD SAPPHIRE CRYSTAL. An unrivaled 14-day power reserve supported by seven in-line barrels visible on the dial side.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 29344911,
            'watch_name' => 'Regrant', 
            'in_stock' => 1, 
            'quantity' => 55, 
            'price' => 3199.99, 
            'cost' => 3449.99, 
            'material' => 'silver', 
            'main_color' => 'grey', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 2, 
            'diameter' => 32,
            'strap_length' => '177mm', 
            'strap_width' => '24mm', 
            'weight' => '168g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'regrant.jpg', 
            'short_description' => 'A contemporary style which plays with established codes, a creative universe where elegance rules.', 
            'long_description' => 'Polished and Satin-finished grey-silver. Black PVD Stainless Steel Deployant Buckle Clasp An unrivaled 14-day power reserve supported by seven in-line barrels visible on the dial side. HUB1131 Self-winding Moonphase Movement', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
          
            'SKU' => 89344911,
            'watch_name' => 'Lotlux', 
            'in_stock' => 1, 
            'quantity' => 300, 
            'price' => 14199.99, 
            'cost' => 16449.99, 
            'material' => 'gold', 
            'main_color' => 'gold', 
            'movement' => 'quartz', 
            'gender' => 'female', 
            'category_id' => 2, 
            'diameter' => 32,
            'strap_length' => '160mm', 
            'strap_width' => '24mm', 
            'weight' => '368g', 
            'water_resistant' => '0 atm', 
            'cover_img' => 'lotlux.jpg', 
            'short_description' => 'Punctuality is key, and this customised Lotlux PseudoSlass series is just what Milad and Dawn Baker presents to help you always stay on time.', 
            'long_description' => 'Imagined with a matte-gold DLC coating, the 32mm timepiece will make sure you\'re never late again. manufactured by Swiss manufacturer Vacheron Constantin and was released in 2020.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        // next 5 will be all material: gold 

        DB::table('watches')->insert([ 
         
            'SKU' => 79344611,
            'watch_name' => 'Domainer', 
            'in_stock' => 1, 
            'quantity' => 880, 
            'price' => 14199.99, 
            'cost' => 16449.99, 
            'material' => 'gold', 
            'main_color' => 'white-gold', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 2, 
            'diameter' => 30,
            'strap_length' => '180mm', 
            'strap_width' => '24mm', 
            'weight' => '398g', 
            'water_resistant' => '0 atm', 
            'cover_img' => 'domainer.jpg', 
            'short_description' => 'The watch has 876 intricate moving parts in total and is housed in a gold case. It measures 30mm in diameter and 20mm thick.', 
            'long_description' => 'It has a moonphase perpetual calendar, a grande and petite sonnerie with minute repeater, and a split-second chronograph. The release marked the manufacturer’s 250th anniversary. They only manufactured 7 limited edition pieces to maintain exclusivity.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
          
            'SKU' => 79344611,
            'watch_name' => 'Voltsillam', 
            'in_stock' => 1, 
            'quantity' => 80, 
            'price' => 15999.99, 
            'cost' => 16449.99, 
            'material' => 'gold', 
            'main_color' => 'black', 
            'movement' => 'mechanical', 
            'gender' => 'female', 
            'category_id' => 2, 
            'diameter' => 28,
            'strap_length' => '160mm', 
            'strap_width' => '24mm', 
            'weight' => '188g', 
            'water_resistant' => '0 atm', 
            'cover_img' => 'voltsillam.jpg', 
            'short_description' => 'The watch has 200 intricate moving parts in total and is housed in a gold case. It measures 28mm in diameter and 15mm thick.', 
            'long_description' => 'Compared to its more conventional counterparts, the Voltsillam has a more sporty, luxurious look to it, thanks to its gold body and contrast stitching. The quality and craftsmanship of the 1928 timepiece are evident in its 99-year existence.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([
        
            'SKU' => 66344611,
            'watch_name' => 'Charmant', 
            'in_stock' => 1, 
            'quantity' => 879, 
            'price' => 20999.99, 
            'cost' => 22449.99, 
            'material' => 'gold', 
            'main_color' => 'black', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 4, 
            'diameter' => 28,
            'strap_length' => '190mm', 
            'strap_width' => '26mm', 
            'weight' => '198g', 
            'water_resistant' => '1 atm', 
            'cover_img' => 'charmant.jpg', 
            'short_description' => 'The Charmant watch is Luxurious plus Sophistication which meets traditional design!', 
            'long_description' => 'Housed in 18kt yellow gold, the watch features two oscillating bodies mounted on an elegant dial. Crafted in 1943, the Charmant 1527 can appear to be rather ordinary on the outside, however, the watch contains more than twenty different precious stones.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
           
            'SKU' => 66302611,
            'watch_name' => 'Alastair', 
            'in_stock' => 1, 
            'quantity' => 879, 
            'price' => 20999.99, 
            'cost' => 22449.99, 
            'material' => 'gold', 
            'main_color' => 'silver', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 4, 
            'diameter' => 28,
            'strap_length' => '177mm', 
            'strap_width' => '23mm', 
            'weight' => '178g', 
            'water_resistant' => '1 atm', 
            'cover_img' => 'alastair.jpg', 
            'short_description' => 'The Alastair watch is Luxurious plus simplicity which meets modern design!', 
            'long_description' => 'Housed in 18kt yellow gold, the watch features two oscillating bodies mounted on an elegant dial. Crafted in 2012, the Charmant 1527 can appear to be rather ordinary on the inside, however, the watch contains more than thirty different precious stones.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


        // next 5 will be all category: smart watch --Alexandr

        DB::table('watches')->insert([ 
          
            'SKU' => 20073498,
            'watch_name' => 'Galaxy Watch', 
            'in_stock' => 1, 
            'quantity' => 76, 
            'price' => 369.99, 
            'cost' => 419.99, 
            'material' => 'titanium', 
            'main_color' => 'black', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 1, 
            'diameter' => 40,
            'strap_length' => '188mm', 
            'strap_width' => '24mm', 
            'weight' => '86g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'galaxywatch.jpg', 
            'short_description' => 'The Galaxy Watch Active2 uses dedicated motion sensors to automatically track popular workouts and provide real-time feedback on your runs with the built-in running coach.', 
            'long_description' => 'Evaluate your sleep patterns and form better habits with the advanced sleep tracker or enjoy interactive meditation and breathing exercises, powered by Calm. Meanwhile, the lightweight, aluminum watch and breathable, flexible strap mean the Galaxy Watch Active2 is ideal for everyday wear. Plus, you can stay connected for longer with a long-lasting battery that lasts for days on a single charge.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
          
            'SKU' => 20496720,
            'watch_name' => 'Fossil Sport', 
            'in_stock' => 1, 
            'quantity' => 69, 
            'price' => 129.99, 
            'cost' => 149.99, 
            'material' => 'stainless steel', 
            'main_color' => 'pink', 
            'movement' => 'automatic', 
            'gender' => 'female', 
            'category_id' => 1, 
            'diameter' => 24,
            'strap_length' => '172mm', 
            'strap_width' => '20mm', 
            'weight' => '112g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'fossilsport.jpg', 
            'short_description' => 'Smartwatches powered with Wear OS by Google are compatible with iPhone and Android phones.', 
            'long_description' => 'Wear OS by Google and other related marks are trademarks of Google LLC. Touchscreen smartwatches powered with Wear OS by Google require a phone running Android OS 6.0+ (excluding Go edition) or iOS 10+. Supported features may vary between platforms.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
        
            'SKU' => 24598763,
            'watch_name' => 'Fitbit Versa', 
            'in_stock' => 1, 
            'quantity' => 97, 
            'price' => 249.99, 
            'cost' => 279.99, 
            'material' => 'carbon fibre', 
            'main_color' => 'black', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 1, 
            'diameter' => 28,
            'strap_length' => '192mm', 
            'strap_width' => '24mm', 
            'weight' => '124g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'fitbitversa.jpg', 
            'short_description' => 'Reach your physical fitness goals in style with the Fitbit Versa 2 smartwatch.', 
            'long_description' => 'Reach your physical fitness goals in style with the Fitbit Versa 2 smartwatch. It automatically tracks your calories burned, steps taken, heart rate, sleeping patterns, and more. It helps keep you in the loop by wirelessly syncing with your smartphone for at-a-glance notifications from texts, emails, social media, and your calendar.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
        
            'SKU' => 29344911,
            'watch_name' => 'Skagen Falster', 
            'in_stock' => 1, 
            'quantity' => 60, 
            'price' => 119.99, 
            'cost' => 139.99, 
            'material' => 'stainless steel', 
            'main_color' => 'rosegold', 
            'movement' => 'automatic', 
            'gender' => 'female', 
            'category_id' => 1, 
            'diameter' => 34,
            'strap_length' => '168mm', 
            'strap_width' => '20mm', 
            'weight' => '132g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'skagen.jpg', 
            'short_description' => 'The epitome of sleek style and smart functionality, the Skagen Falster 2 smartwatch is a timepiece you won’t want to take off.', 
            'long_description' => 'The epitome of sleek style and smart functionality, the Skagen Falster 2 smartwatch is a timepiece you won’t want to take off. Powered by Wear OS, the Falster 2 tracks activity and heart rate, and alerts you of incoming calls, texts, and more. An interchangeable band and customizable dial allow you to tailor this smartwatch to your style.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 89765411,
            'watch_name' => 'Fitbit Charge', 
            'in_stock' => 1, 
            'quantity' => 300, 
            'price' => 149.99, 
            'cost' => 179.99, 
            'material' => 'stainless steel', 
            'main_color' => 'black', 
            'movement' => 'automatic', 
            'gender' => 'mail', 
            'category_id' => 1, 
            'diameter' => 28,
            'strap_length' => '190mm', 
            'strap_width' => '20mm', 
            'weight' => '146g', 
            'water_resistant' => '2 atm', 
            'cover_img' => 'fitbitcharge.jpg', 
            'short_description' => 'Maximize workouts with PurePulse heart rate, multi-sport modes and connected GPS.', 
            'long_description' => 'Make every beat count with Fitbit Charge 2 the all-new heart rate and fitness wristband. Maximize workouts with PurePulse heart rate, multi-sport modes and connected GPS. Track all-day activity, exercise and sleep. And make the most of your entire routine with smartphone notifications, reminders to move and personalized guided breathing sessions. With so many next-generation features, plus interchangeable bands and long battery life, it’s the motivation you need to push yourself further.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        // next 5 will be all category: luxury watch --Alexandr
        
        DB::table('watches')->insert([ 
          
            'SKU' => 20234876,
            'watch_name' => 'Speedmaster', 
            'in_stock' => 1, 
            'quantity' => 23, 
            'price' => 3395.99, 
            'cost' => 3795.99, 
            'material' => 'titanium', 
            'main_color' => 'black', 
            'movement' => 'mechanical', 
            'gender' => 'male', 
            'category_id' => 2, 
            'diameter' => 46,
            'strap_length' => '196mm', 
            'strap_width' => '24mm', 
            'weight' => '148g', 
            'water_resistant' => '6 atm', 
            'cover_img' => 'speedmaster.jpg', 
            'short_description' => 'Speedmaster Racing Automatic Chronograph Black Dial Men\'s Watch', 
            'long_description' => 'Silver-tone stainless steel case with a black rubber strap. Fixed tachymeter scale silver-tone black aluminium ring with tachymeter marki bezel. Black dial with luminous silver-tone hands and index hour markers. Minute markers around the outer rim. Dial Type: Analog. Luminescent hands and markers', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
           
            'SKU' => 20598356,
            'watch_name' => 'Cosmograph', 
            'in_stock' => 1, 
            'quantity' => 13, 
            'price' => 23999.99, 
            'cost' => 25999.99, 
            'material' => 'stainless steel', 
            'main_color' => 'silver', 
            'movement' => 'mechanical', 
            'gender' => 'male', 
            'category_id' => 2, 
            'diameter' => 38,
            'strap_length' => '192mm', 
            'strap_width' => '22mm', 
            'weight' => '168g', 
            'water_resistant' => '9 atm', 
            'cover_img' => 'cosmograph.jpg', 
            'short_description' => 'Luminescent chromolite 18 ct white gold hands and markers. Chronograph - three sub-dials displaying: 60 second, 30 minute and 12 hour.', 
            'long_description' => 'Silver-tone 904l stainless steel case with a silver-tone stainless steel rolex oyster bracelet. Fixed tachymeter scale black monobloc cerachrom bezel. White dial with silver-tone hands and index hour markers. Minute markers around the outer rim. Dial Type: Analog. Luminescent chromolite 18 ct white gold hands and markers. Chronograph - three sub-dials displaying: 60 second, 30 minute and 12 hour.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
          
            'SKU' => 24598763,
            'watch_name' => 'Blancpain', 
            'in_stock' => 1, 
            'quantity' => 17, 
            'price' => 6299.99, 
            'cost' => 6999.99, 
            'material' => 'stainless steel', 
            'main_color' => 'black', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 2, 
            'diameter' => 32,
            'strap_length' => '190mm', 
            'strap_width' => '24mm', 
            'weight' => '194g', 
            'water_resistant' => '12 atm', 
            'cover_img' => 'blancpain.jpg', 
            'short_description' => 'Blancpain Calibre 1315 Automatic movement, containing 35 Jewels, composed of 227 parts.', 
            'long_description' => 'For a luxury watch you can wear every day, this watch offers a sport stainless steel case, black ceramic bezel, and a strap made from sturdy sail canvas. Inside, you\'ll find a Blancpain calibre 1315 automatic movement with an 120-hour power reserve.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
          
            'SKU' => 45982567,
            'watch_name' => 'Avalanche', 
            'in_stock' => 1, 
            'quantity' => 67, 
            'price' => 1799.99, 
            'cost' => 1939.99, 
            'material' => 'carbon fibre', 
            'main_color' => 'white', 
            'movement' => 'automatic', 
            'gender' => 'female', 
            'category_id' => 2, 
            'diameter' => 28,
            'strap_length' => '174mm', 
            'strap_width' => '20mm', 
            'weight' => '116g', 
            'water_resistant' => '8 atm', 
            'cover_img' => 'avalanche.jpg', 
            'short_description' => 'White ceramic case with a white rubber strap. Fixed bezel set with diamond.', 
            'long_description' => 'White ceramic case with a white rubber strap. Fixed bezel set with diamond. White mother of pearl dial with silver-tone hands and diamond hour markers. Arabic numerals mark the 6, 9 and 12 o\'clock positions. Minute markers around the outer rim. Dial Type: Analog. Luminescent hands. Date display at the 3 o\'clock position. Swiss quartz movement. Scratch resistant anti-reflective sapphire crystal.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
            
            'SKU' => 89398743,
            'watch_name' => 'Chopard', 
            'in_stock' => 1, 
            'quantity' => 53, 
            'price' => 8199.99, 
            'cost' => 8999.99, 
            'material' => 'stainless steel', 
            'main_color' => 'silver', 
            'movement' => 'automatic', 
            'gender' => 'femail', 
            'category_id' => 2, 
            'diameter' => 26,
            'strap_length' => '176mm', 
            'strap_width' => '20mm', 
            'weight' => '153g', 
            'water_resistant' => '12 atm', 
            'cover_img' => 'chopard.jpg', 
            'short_description' => '18kt rose gold case with a two-tone (silver-tone and gold-tone) stainless steel bracelet. Fixed gold-tone bezel.', 
            'long_description' => 'White dial with gold-tone hands and Roman numeral and index hour markers. Minute markers around the outer rim. Dial Type: Analog. Date display between 4 and 5 o\'clock position. Quartz movement. Scratch resistant sapphire crystal. Solid case back. Round case shape, case size: 36 mm, case thickness: 8.1 mm. Fold over clasp. Functions: date, hour, minute, second. Luxury watch style.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        // next 5 will be all category: digital watch --Aina 

        DB::table('watches')->insert([ 
       
            'SKU' => 66301278,
            'watch_name' => 'Saddlery', 
            'in_stock' => 1, 
            'quantity' => 89, 
            'price' => 209.99, 
            'cost' => 249.99, 
            'material' => 'silver', 
            'main_color' => 'silver', 
            'movement' => 'automatic', 
            'gender' => 'male', 
            'category_id' => 4, 
            'diameter' => 28,
            'strap_length' => '187mm', 
            'strap_width' => '24mm', 
            'weight' => '128g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'saddlrey.jpg', 
            'short_description' => 'The completion of a corporate celebration is typically marked with purchasing the 2020 favourite digital Saddlery watch.', 
            'long_description' => 'Using genuinely new case architecture and a crystal that curved on two separate axis, you could see why AP hailed Saddlery as radical a design as the TechWatches iconic octagonal case and integrated metal bracelet. A new-for-2020 palate of colours is a welcome update.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
        
            'SKU' => 66302611,
            'watch_name' => 'Heuerald', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'price' => 199.99, 
            'cost' => 299.99, 
            'material' => 'silver', 
            'main_color' => 'black', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 4, 
            'diameter' => 28,
            'strap_length' => '170mm', 
            'strap_width' => '23mm', 
            'weight' => '121g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'heuerald.jpg', 
            'short_description' => 'Built from a new material that combines “the lightness of titanium” with “the hardness of diamond” and looking like something from the distant future, this could only be a TechWatch.', 
            'long_description' => 'It comes with an OLED screen, a 45mm matte black titanium case and a full suite of smartwatch functions including heart rate monitor, accelerometer and gyroscope. In addition, there’s detailed golf data for some 40,000 courses around the world, with game-focused features like distance to green and hazards, shot distance and score keeping..', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 66304411,
            'watch_name' => 'Culture', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'price' => 1189.99, 
            'cost' => 1299.99, 
            'material' => 'titanium', 
            'main_color' => 'white', 
            'movement' => 'quartz', 
            'gender' => 'female', 
            'category_id' => 4, 
            'diameter' => 28,
            'strap_length' => '160mm', 
            'strap_width' => '23mm', 
            'weight' => '111g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'culture.jpg', 
            'short_description' => 'There’s something magical about a chiming cultured wristwatch, doubly so if its made by TechWatch, whose family of dress watches may be unparalleled.', 
            'long_description' => 'The first culture came out in the Fifties, one of the first generation of wristwatches to come with a chiming, vibrating alarm complication. The 2020 version has been slimmed down and tidied up, and (naturally) features a completely new movement. It’s beautifully proportioned, extremely stylish and surprisingly loud. A modern classic.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
        
            'SKU' => 69302611,
            'watch_name' => 'Huebolt', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'price' => 1189.99, 
            'cost' => 1299.99, 
            'material' => 'carbon fibre', 
            'main_color' => 'brown', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 4, 
            'diameter' => 28,
            'strap_length' => '160mm', 
            'strap_width' => '23mm', 
            'weight' => '122g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'huebolt.jpg', 
            'short_description' => 'Following its 2018 FIFA World Cup smartwatch, Hueblot has produced a second watch running Wear OS.', 
            'long_description' => 'The Big Bang e comes in two versions: carbon fibre, with  and black ceramic. Both feature a 42mm OLED high-definition touchscreen covered with quartz crystal, and 8GB of storage. In addition to the ‘time only’ analogue function, the Huebolt features interpretations of traditional watch complications, including one that tracks the lunar.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
           
            'SKU' => 61122611,
            'watch_name' => 'Bretting', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'price' => 1189.99, 
            'cost' => 1299.99, 
            'material' => 'carbon fibre', 
            'main_color' => 'brown', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 4, 
            'diameter' => 28,
            'strap_length' => '160mm', 
            'strap_width' => '23mm', 
            'weight' => '122g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'huebolt.jpg', 
            'short_description' => 'Bretting continues to roll out new watches for 2020 with the new Premier TechWatch Mulliner Limited Edition..', 
            'long_description' => 'The watch features a solid 42mm polished steel case with a push/pull crown and rectangular chronograph pushers. The enlarged Arabic numbers and red and blue detailing lend this piece a vintage, dressy feel.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        // next 5 will be all category: quartz --Aina 
        DB::table('watches')->insert([ 
         
            'SKU' => 81155511,
            'watch_name' => 'Rair', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'price' => 1189.99, 
            'cost' => 1299.99,   
            'material' => 'carbon fibre', 
            'main_color' => 'brown', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 5, 
            'diameter' => 28,
            'strap_length' => '160mm', 
            'strap_width' => '23mm', 
            'weight' => '122g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'rair.jpg', 
            'short_description' => 'Rair continues to surpise and not dissapoint.', 
            'long_description' => 'The watch features a solid movement made of rare quartz  with a push/pull crown and circular chronograph pushers. The enlarged Arabic numbers and red and blue detailing lend this piece a vintage, dressy feel.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 81155001,
            'watch_name' => 'Elixir II', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'price' => 1119.99, 
            'cost' => 1219.99,   
            'material' => 'stainless steel', 
            'main_color' => 'silver', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 5, 
            'diameter' => 28,
            'strap_length' => '156mm', 
            'strap_width' => '24mm', 
            'weight' => '122g', 
            'water_resistant' => '26 atm', 
            'cover_img' => 'elixir.jpg', 
            'short_description' => 'Exilir is the newly released and improved version of our first Elixir series.', 
            'long_description' => 'When it was launched last year in a limited run, Elixir\'s first military-inspired automatic watch sold out quicker than you could say, "An automatic watch for how much?" Those who missed out now have a second chance to grab a watch that channels Elixir\'s military heritage but adds clever guts (a 21-jewel Japanese automatic movement) and will still leave you change from $1119.99. With only 100m water resistance it\'s more a desk diving watch than a diver diving watch. But at that price, we\'re not ones to quibble..', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 10955531,
            'watch_name' => 'Kunghans', 
            'in_stock' => 1, 
            'quantity' => 32, 
            'price' => 119.99, 
            'cost' => 219.99,   
            'material' => 'stainless steel', 
            'main_color' => 'black', 
            'movement' => 'quartz', 
            'gender' => 'female', 
            'category_id' => 5, 
            'diameter' => 28,
            'strap_length' => '156mm', 
            'strap_width' => '18mm', 
            'weight' => '112g', 
            'water_resistant' => '6 atm', 
            'cover_img' => 'kunghans.jpg', 
            'short_description' => 'Once this PseudoSlass company was the biggest watch manufacturer in the world. Today it maintains a pole position in the league of best-designed brands, noted for its clean dials and minimalist indices. .', 
            'long_description' => 'When it was launched last year in a limited run, Elixir\'s first military-inspired automatic watch sold out quicker than you could say, "An automatic watch for how much?" Those who missed out now have a second chance to grab a watch that channels Elixir\'s military heritage but adds clever guts (a 21-jewel Japanese automatic movement) and will still leave you change from $1119.99. With only 100m water resistance it\'s more a desk diving watch than a diver diving watch. But at that price, we\'re not ones to quibble..', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


        DB::table('watches')->insert([ 
          
            'SKU' => 10955531,
            'watch_name' => 'Prospex', 
            'in_stock' => 1, 
            'quantity' => 32, 
            'price' => 1319.99, 
            'cost' => 2219.99,   
            'material' => 'gold', 
            'main_color' => 'gold', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 5, 
            'diameter' => 28,
            'strap_length' => '156mm', 
            'strap_width' => '18mm', 
            'weight' => '42g', 
            'water_resistant' => '26 atm', 
            'cover_img' => 'prospex.jpg', 
            'short_description' => 'One of the nicest-looking chronographs and arguably the classic TechWatches dress watch now comes with a self-winding in-house movement that significantly lowers its entry price.', 
            'long_description' => 'Inspired by the world of night diving, which may be a first, Prospex new series of dive watches are distinguished by their none-more-black DLC-coated gold cases.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
           
            'SKU' => 19955666,
            'watch_name' => 'Finissemo', 
            'in_stock' => 1, 
            'quantity' => 561, 
            'price' => 2319.99, 
            'cost' => 3219.99,   
            'material' => 'gold', 
            'main_color' => 'gold', 
            'movement' => 'quartz', 
            'gender' => 'male', 
            'category_id' => 5, 
            'diameter' => 28,
            'strap_length' => '156mm', 
            'strap_width' => '18mm', 
            'weight' => '42g', 
            'water_resistant' => '3 atm', 
            'cover_img' => 'finissemo.jpg', 
            'short_description' => 'Finnisemo\'s first release of 2020 is a new version of its  Finissimo Automatic, which debuted in 2017.', 
            'long_description' => 'Back then, it created quite a stir – at a scarcely-possible 2.23mm thick, it contained the world’s thinnest self-winding movement. The paper-thin sports watch has previously been available in titanium, stainless steel, rose gold, and gold all with a sandblasted finish. Now that family is joined by two new models – in steel with a bracelet, or 18ct rose gold with a strap – that feature a fancy satin-polished finish, and also play up the contrast between the black lacquered dial and the polished hands and indexes.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
            'SKU' => 66302621,
            'watch_name' => 'Cartier', 
            'in_stock' => 1, 
            'quantity' => 179, 
            'price' => 20992.99, 
            'cost' => 22442.99, 
            'material' => 'silicone rubber ', 
            'main_color' => 'wodden', 
            'movement' => 'mechanical', 
            'gender' => 'female', 
            'category_id' => 3, 
            'diameter' => 28,
            'strap_length' => '161mm', 
            'strap_width' => '18mm', 
            'weight' => '152g', 
            'water_resistant' => '1 atm', 
            'cover_img' => 'cartier.jpg', 
            'short_description' => 'Cartier Tank Solo XL Automatic Stainless Steel Mens Watch W5200028', 
            'long_description' => 'The Tank has been a collectors icon since the 1920s. It was designed in 1917 by Louis Cartier and everyone from Cary Grant to Andy Warhol has worn one. You should too.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

         DB::table('watches')->insert([ 
            'SKU' => 66302631,
            'watch_name' => 'Grip', 
            'in_stock' => 1, 
            'quantity' => 279, 
            'price' => 20993.99, 
            'cost' => 22443.99, 
            'material' => 'stainless steel', 
            'main_color' => 'silver', 
            'movement' => 'mechanical', 
            'gender' => 'male', 
            'category_id' => 3, 
            'diameter' => 28,
            'strap_length' => '181mm', 
            'strap_width' => '20mm', 
            'weight' => '152g', 
            'water_resistant' => '1 atm', 
            'cover_img' => 'grip.jpg', 
            'short_description' => 'Grip 35mm watch Gucci', 
            'long_description' => 'Named for the skateboard terminology for the way sneakers "grip" the skateboard tape, Guccis unusual watch features three indicator dials.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


         DB::table('watches')->insert([ 
            'SKU' => 66302641,
            'watch_name' => 'Laureato', 
            'in_stock' => 1, 
            'quantity' => 379, 
            'price' => 20994.99, 
            'cost' => 22444.99, 
            'material' => 'silver', 
            'main_color' => 'black', 
            'movement' => 'mechanical', 
            'gender' => 'male', 
            'category_id' => 3, 
            'diameter' => 28,
            'strap_length' => '185mm', 
            'strap_width' => '22mm', 
            'weight' => '172g', 
            'water_resistant' => '1 atm', 
            'cover_img' => 'laureato.jpg', 
            'short_description' => 'Laureato Hand Wind Mens Watch Girard Perregaux', 
            'long_description' => 'An updated version of the classic 1975 style, this hand-winding movement features a skeleton dial with a 54 hour power reserve and a black ceramic casing and strap.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


         DB::table('watches')->insert([ 
            'SKU' => 66302651,
            'watch_name' => 'Bracelet', 
            'in_stock' => 1, 
            'quantity' => 479, 
            'price' => 20995.99, 
            'cost' => 22445.99, 
            'material' => 'rosegold ', 
            'main_color' => 'silver', 
            'movement' => 'mechanical', 
            'gender' => 'female', 
            'category_id' => 3, 
            'diameter' => 28,
            'strap_length' => '175mm', 
            'strap_width' => '21mm', 
            'weight' => '162g', 
            'water_resistant' => '1 atm', 
            'cover_img' => 'bracelet.jpg', 
            'short_description' => 'Bracelet Watch, 40mm MOVAD', 
            'long_description' => 'For the ultra-minimalist, this all black dial features a Museum dot at 12 o clock.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


          DB::table('watches')->insert([ 
            'SKU' => 66302661,
            'watch_name' => 'Piaget', 
            'in_stock' => 1, 
            'quantity' => 579, 
            'price' => 20996.99, 
            'cost' => 22446.99, 
            'material' => 'carbon fibre', 
            'main_color' => 'black', 
            'movement' => 'mechanical', 
            'gender' => 'male', 
            'category_id' => 3, 
            'diameter' => 28,
            'strap_length' => '190mm', 
            'strap_width' => '24mm', 
            'weight' => '172g', 
            'water_resistant' => '1 atm', 
            'cover_img' => 'piaget.jpg', 
            'short_description' => 'Piaget Altiplano 38mm, 18K White Gold and Alligator', 
            'long_description' => 'Billed as the worlds thinnest automatic watch, this slender hand-wound 18k gold watch measures just 3.65mm thick.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);
        //mechanical watch ends
    }
}
