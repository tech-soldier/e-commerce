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
    	// first 5 record are all gender: male 

        DB::table('watches')->insert([
        	
        	'SKU' => 22567959,
        	'watch_name' => 'AIR-KING', 
        	'in_stock' => 1, 
        	'quantity' => 26, 
        	'cost' => 1399.99, 
        	'price' => 1799.99, 
        	'material' => 'gold', 
        	'main_color' => 'silver', 
        	'movement' => 'quartz', 
        	'gender' => 'male', 
        	'category_id' => 2, 
        	'diameter' => 33,
        	'strap_length' => '184mm', 
        	'strap_width' => '18mm', 
        	'weight' => '122g', 
        	'water_resistant' => '3 atm', 
        	'cover_img' => 'AIR_KING.jpg', 
        	'short_description' => 'The Oyster Perpetual Air-King pays tribute to the pioneers of flight and the Oyster’s roles in the epic story of aviation.', 
        	'long_description' => 'With its 40 mm case in Oystersteel, solid-link Oyster bracelet with Oysterclasp, and distinctive Black dial, the Air-King perpetuates the aeronautical heritage of the original Rolex Oyster.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([
        	
        	'SKU' => 22567950,
        	'watch_name' => 'BLUE-DWELLER', 
        	'in_stock' => 1, 
        	'quantity' => 89, 
        	'cost' => 1699.99, 
        	'price' => 2100.99, 
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
        	'cover_img' => 'BLUE_DWELLER.jpg', 
        	'short_description' => 'Yellow Rolesor with a Blue Cerachrom bezel and a blue dial with large luminescent hour markers.', 
        	'long_description' => 'It features a unidirectional rotatable bezel with Cerachrom insert and solid-link Oyster bracelet. The latest generation Submariner and Submariner Date remain faithful to the original model launched in 1953. In watchmaking, the Submariner represented a historic turning point; it set the standard for divers’ watches.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([
        	 
        	'SKU' => 22567900,
        	'watch_name' => 'CELLINI', 
        	'in_stock' => 1, 
        	'quantity' => 12, 
        	'cost' => 599.99, 
        	'price' => 999.99, 
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
        	'cover_img' => 'CELLINI.jpg', 
        	'short_description' => 'The Cellini collection celebrates the eternal elegance of traditional timepieces with a contemporary touch; the name was inspired by the Italian Renaissance artist, Benvenuto Cellini.', 
        	'long_description' => 'This collection combines the best of Rolex know-how and its high standards of perfection with an approach that heightens watchmaking heritage in its most timeless form. The lines of the Cellini models are sober and refined, the materials noble, the finishings luxurious: every detail respects the codes of the art of watchmaking.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

         

        DB::table('watches')->insert([
        	
        	'SKU' => 22567100,
        	'watch_name' => 'DATEJUST', 
        	'in_stock' => 1, 
        	'quantity' => 20, 
        	'cost' => 1999.99, 
        	'price' => 2989.99, 
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
        	'cover_img' => 'DATEJUST.jpg', 
        	'short_description' => 'The Oyster Perpetual Datejust is the epitome of the classic Rolex watch. ', 
        	'long_description' => 'Created in 1945, the Datejust was the first self-winding waterproof chronometer wristwatch to display the date in a window at 3 o’clock on the dial – hence its name. With its timeless aesthetics, functions and rich history, the Datejust is a watchmaking icon and one of the brand’s most recognizable watches.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        // next 5 are all gender: female 

        DB::table('watches')->insert([ 
           
        	'SKU' => 22567900,
        	'watch_name' => 'DAY-DATE', 
        	'in_stock' => 1, 
        	'quantity' => 20, 
        	'cost' => 1999.99, 
        	'price' => 2989.99, 
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
        	'cover_img' => 'DAY_DATE.jpg', 
        	'short_description' => 'Launched in 1956, the Day-Date made its debut as the first waterproof and self-winding chronometer wristwatch.', 
        	'long_description' => 'The exceptional precision, reliability, legibility and presence of this prestigious model has made it the ultimate status watch. It is offer a modern calendar with an instantaneous day display, spelt out in full in a window on the dial, in addition to the date.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
           
        	'SKU' => 22567980,
        	'watch_name' => 'EXPLORER', 
        	'in_stock' => 1, 
        	'quantity' => 20, 
        	'cost' => 1999.99, 
        	'price' => 2989.99, 
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
        	'cover_img' => 'EXPLORER.jpg', 
        	'short_description' => 'The Oyster Perpetual Explorer and Oyster Perpetual Explorer II evolved from Rolex’s deep involvement with exploration. They go where few people venture.', 
        	'long_description' => 'The brand was able to test these watches in real life by equipping polar, mountaineering and caving expeditions over many years. Some of the world’s most intrepid explorers, mountaineers and scientists took Explorer and Explorer II watches to places that tested their reliability in the toughest conditions.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
            
        	'SKU' => 22567980,
        	'watch_name' => 'GMT-MASTER', 
        	'in_stock' => 1, 
        	'quantity' => 21, 
        	'cost' => 678.99, 
        	'price' => 1211.99, 
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
        	'cover_img' => 'GMT_MASTER_II.jpg', 
        	'short_description' => 'Designed to show the time in two different time zones simultaneously, the GMT-Master, launched in 1955, was originally developed as a navigation instrument for professionals criss-crossing the globe.', 
        	'long_description' => 'Heir to the original model, the GMT-Master II was unveiled in 1982, with a new movement ensuring ease of use. Its combination of peerless functionality, robustness and instantly recognizable aesthetics has attracted a wider audience of world travellers.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
           
        	'SKU' => 22561980,
        	'watch_name' => 'LADY-DATEJUST', 
        	'in_stock' => 1, 
        	'quantity' => 201, 
        	'cost' => 1299.99, 
        	'price' => 1811.99, 
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
        	'cover_img' => 'LADY_DATEJUST.jpg', 
        	'short_description' => 'With its refined glamour, Rolex’s classic women’s watch, the Lady-Datejust, stands for style and technical performance.', 
        	'long_description' => 'The women’s version of the emblematic Datejust, created in 1945, was unveiled in 1957. With all its timeless elegance and functionality, it is today offered in a petite 28 mm size.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
           
        	'SKU' => 22561980,
        	'watch_name' => 'MILGAUSS', 
        	'in_stock' => 1, 
        	'quantity' => 201, 
        	'cost' => 2299.99, 
        	'price' => 4811.99, 
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
        	'cover_img' => 'MILGAUUSS.jpg', 
        	'short_description' => 'The Oyster Perpetual Milgauss is a pioneering anti-magnetic watch designed to meet the demands of engineers and scientists.', 
        	'long_description' => 'Created in 1956, it can withstand magnetic fields of up to 1,000 gauss. Hence its name, “mille”, which is French for one thousand. The first watch of its kind, the Milgauss combines unique aesthetics and scientific heritage.', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        // next 5 will be all material: silicone rubber 
        DB::table('watches')->insert([ 
      
            'SKU' => 23561980,
            'watch_name' => 'MILGAUUSS', 
            'in_stock' => 1, 
            'quantity' => 1222, 
            'cost' => 219.99, 
            'price' => 411.99, 
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
            'cover_img' => 'MILGAUSS.jpg', 
            'short_description' => 'The Oyster Perpetual Milgauuss is a pioneering anti-magnetic watch designed to meet the demands of engineers and scientists.', 
            'long_description' => 'Created in 1958, it can withstand magnetic fields of up to 1,400 gauss. Hence its name, “mille”, which is French for one thousand. The first watch of its kind, the Milgauuss combines unique aesthetics and scientific heritage.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
          
            'SKU' => 20361980,
            'watch_name' => 'OYSTER PERPETUAL', 
            'in_stock' => 1, 
            'quantity' => 92, 
            'cost' => 211.99, 
            'price' => 421.99, 
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
            'cover_img' => 'OYSTER_PERPETUAL.jpg', 
            'short_description' => 'The Oyster Perpetual is the purest expression of the Oyster concept, providing a clear and accurate time display.', 
            'long_description' => 'This watch is the direct descendant of the original Oyster launched in 1926, the first waterproof wristwatch in the world and the foundation on which Rolex has built its reputation.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
            
            'SKU' => 20001980,
            'watch_name' => 'PEARLMASTER', 
            'in_stock' => 1, 
            'quantity' => 9, 
            'cost' => 249.99, 
            'price' => 449.99, 
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
            'cover_img' => 'PEARLMASTER.jpg', 
            'short_description' => 'The Oyster Perpetual Pearlmaster holds a special place in the Oyster collection', 
            'long_description' => 'It represents the height of exquisiteness, with precious metals and gemstones. As a watchmaking jewel expressing refinement and elegance.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
          
            'SKU' => 20001985,
            'watch_name' => 'SEA-DWELLER', 
            'in_stock' => 1, 
            'quantity' => 9, 
            'cost' => 1249.99, 
            'price' => 1449.99, 
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
            'cover_img' => 'SEA_DWELLER.jpg', 
            'short_description' => 'The Sea-Dweller and Rolex Deepsea are ultra-resistant divers’ watches engineered by Rolex for deep-sea exploration.', 
            'long_description' => 'Waterproof to a depth of 4,000 feet (1,220 metres) for the Rolex Sea-Dweller, launched in 1967, and 12,800 feet (3,900 metres) for the Rolex Deepsea unveiled in 2008, they are the ultimate manifestation of Rolex’s leadership in divers’ watches and the result of decades of collaboration with diving professionals. In 2014 Rolex released a special version of the model, the Rolex Deepsea with a D-blue dial, to commemorate James Cameron’s historic solo dive to the bottom of the Mariana Trench, some 11,000 metres deep. From twilight blue to bottomless black, its two-colour gradient dial celebrates one man’s journey to the deepest place on Earth.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('watches')->insert([ 
        
            'SKU' => 20001911,
            'watch_name' => 'SKY-DWELLER', 
            'in_stock' => 1, 
            'quantity' => 771, 
            'cost' => 299.99, 
            'price' => 449.99, 
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
            'cover_img' => 'SKY_DWELLER.jpg', 
            'short_description' => 'The Oyster Perpetual Sky-Dweller is a timepiece with a unique design that blends technological sophistication and ease of use.', 
            'long_description' => 'It features an innovative annual calendar called Saros and a dual time zone display, making it the ideal watch for world travellers.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        // next 5 will be all material: silver 

        DB::table('watches')->insert([ 
         
            'SKU' => 20001911,
            'watch_name' => 'SUBMARINER', 
            'in_stock' => 1, 
            'quantity' => 755, 
            'cost' => 299.99, 
            'price' => 449.99, 
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
            'cover_img' => 'SUBMARINER.jpg', 
            'short_description' => 'The Oyster Perpetual Submariner is a reference among divers’ watches; it is the watch that unlocked the deep.', 
            'long_description' => 'Launched in 1953, the Submariner was the first divers’ wristwatch waterproof to a depth of 100 metres (330 feet). This was the second great breakthrough in the technical mastery of waterproofness, following the invention of the Oyster, the world’s first waterproof wristwatch, in 1926. In watchmaking, the Submariner represented a historic turning point; it set the standard for divers’ watches.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
       
            'SKU' => 20071911,
            'watch_name' => 'SWISS ARMY', 
            'in_stock' => 1, 
            'quantity' => 55, 
            'cost' => 2199.99, 
            'price' => 2449.99, 
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
            'cover_img' => 'SWISS_ARMY.jpg', 
            'short_description' => 'The Oyster Perpetual Rolex Deepsea in Oystersteel with a black ceramic bezel and an Oyster bracelet.', 
            'long_description' => 'It features a black dial and large luminescent hour markers. Waterproof to a depth of 12,800 feet (3,900 metres) with a unidirectional 60-minute rotatable bezel, the Rolex Deepsea is amongst the ultra-resistant divers’ watches engineered by Rolex for deep-sea exploration. ', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
       
            'SKU' => 29301911,
            'watch_name' => 'SWISS QUARTZ', 
            'in_stock' => 1, 
            'quantity' => 55, 
            'cost' => 3199.99, 
            'price' => 3449.99, 
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
            'cover_img' => 'SWISS_QUARTZ.jpg', 
            'short_description' => 'This is one of the more affordable variants of the Maverick watch, but not necessarily the best one.', 
            'long_description' => 'But if you’re not in the mood to spend more than $250 on a watch, then this is just the right model to look at. And that’s Amazon’s priceing – at Victorinox, you’ll have to pay twice that. So, bear that in mind.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 29344911,
            'watch_name' => 'YACHT-MASTER II', 
            'in_stock' => 1, 
            'quantity' => 55, 
            'cost' => 3199.99, 
            'price' => 3449.99, 
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
            'cover_img' => 'YACHT_MASTER_II.jpg', 
            'short_description' => 'The Rolex Yacht-Master and Yacht-Master II models embody the spirit of the sailor.', 
            'long_description' => 'Inspired by the rich heritage that has bound Rolex to the world of sailing since the 1950s, the Yacht-Master blends function and style, while the Yacht-Master II brings together the finest in Rolex technology to create a regatta chronograph built for yachting competition.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
          
            'SKU' => 89344911,
            'watch_name' => 'YATCH-MASTER', 
            'in_stock' => 1, 
            'quantity' => 300, 
            'cost' => 14199.99, 
            'price' => 16449.99, 
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
            'cover_img' => 'YATCH_MASTER.jpg', 
            'short_description' => 'The Rolex Yacht-Master and Yacht-Master models embody the spirit of the sailor.', 
            'long_description' => 'Inspired by the rich heritage that has bound Rolex to the world of sailing since the 1960s, the Yacht-Master blends function and style, while the Yacht-Master brings together the finest in Rolex technology to create a regatta chronograph built for yachting competition.',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        // next 5 will be all material: gold 

        DB::table('watches')->insert([ 
         
            'SKU' => 79344611,
            'watch_name' => 'OYSTER PERRPETUAL', 
            'in_stock' => 1, 
            'quantity' => 880, 
            'cost' => 14199.99, 
            'price' => 16449.99, 
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
            'cover_img' => 'OYSTER_PERRPETUAL.jpg', 
            'short_description' => 'The Oyster Perrpetual is the purest expression of the Oyster concept, providing a clear and accurate time display.', 
            'long_description' => 'This watch is the direct descendant of the original Oyster launched in 1926, the first waterproof wristwatch in the world and the foundation on which Rolex has built its reputation.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
          
            'SKU' => 79344611,
            'watch_name' => 'ATLAS WALNUT', 
            'in_stock' => 1, 
            'quantity' => 80, 
            'cost' => 15999.99, 
            'price' => 16449.99, 
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
            'cover_img' => 'Atlas_Walnut_Blue_Marble.jpg', 
            'short_description' => 'Travel through time with the Atlas Collection - Treehut’s first automatic watch - a combination of elegant style and pure form mechanics for the man who appreciates timeless designs with intelligence and grace.', 
            'long_description' => 'Featuring a real marble dial with a small window revealing the movement, adorned with wood bezel on a vintage inspired barrel-shaped stainless steel case, creating the minimal and versatile everyday watch for the profound well-traveled man.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([
        
            'SKU' => 66344611,
            'watch_name' => 'CARTIER TANK', 
            'in_stock' => 1, 
            'quantity' => 879, 
            'cost' => 20999.99, 
            'price' => 22449.99, 
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
            'cover_img' => 'Cartier_Tank_Solo_XL.jpg', 
            'short_description' => 'Cartier Tank Solo XL Automatic Stainless Steel Mens Watch W5200028', 
            'long_description' => 'The Tank has been a collectors icon since the 1920s. It was designed in 1917 by Louis Cartier and everyone from Cary Grant to Andy Warhol has worn one. You should too. ', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
           
            'SKU' => 66302611,
            'watch_name' => 'PATEK PHILIPPE', 
            'in_stock' => 1, 
            'quantity' => 879, 
            'cost' => 20999.99, 
            'price' => 22449.99, 
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
            'cover_img' => 'Patek_Philippe_Grand.jpg', 
            'short_description' => 'Patek Philippe Grand Complications 41mm, 18K Rose Gold and Alligator', 
            'long_description' => 'This manually-wound watch features day, month, leap year and day or night indicators as well as a seconds subdial.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


        // next 5 will be all category: smart watch --Alexandr

        

        DB::table('watches')->insert([ 
        
            'SKU' => 24598763,
            'watch_name' => 'BLANCPAIN', 
            'in_stock' => 1, 
            'quantity' => 97, 
            'cost' => 249.99, 
            'price' => 279.99, 
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
            'cover_img' => 'Blancpain_Fifty_Fathoms.jpg', 
            'short_description' => 'Blancpain Fifty Fathoms Meteor Automatic 43mm', 
            'long_description' => 'For a luxury watch you can wear every day, this watch offers a sport stainless steel case, black ceramic bezel, and a strap made from sturdy sail canvas. Inside, you will find a Blancpain calibre 1315 automatic movement with an 120-hour power reserve. ', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
        
            'SKU' => 29344911,
            'watch_name' => 'CHANEL MONSIEUR', 
            'in_stock' => 1, 
            'quantity' => 60, 
            'cost' => 119.99, 
            'price' => 139.99, 
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
            'cover_img' => 'Chanel_Monsieur_Watch.jpg', 
            'short_description' => 'Chanel Monsieur Watch 40mm', 
            'long_description' => 'For a sophisticated, minimalist look, this Chanel watch with an opaline dial, 18k beige gold case, and alligator strap is just what you need. ', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 89765411,
            'watch_name' => 'BLANCPAIN FIFTY', 
            'in_stock' => 1, 
            'quantity' => 300, 
            'cost' => 149.99, 
            'price' => 179.99, 
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
            'cover_img' => 'Blancpain_Fifty_Fathoms_Automatic.jpg', 
            'short_description' => 'Blancpain Fifty Fathoms Automatic 45mm', 
            'long_description' => 'Blancpain introduced the first Fifty Fathoms watch in 1953 as the first modern divers watch and this iconic version, water-resistant at up to 1000 feet offers an update on the classic with an added date marker and luminescent hands. ', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        // next 5 will be all category: luxury watch --Alexandr
        
        DB::table('watches')->insert([ 
          
            'SKU' => 20234876,
            'watch_name' => 'BULGARI', 
            'in_stock' => 1, 
            'quantity' => 23, 
            'cost' => 3395.99, 
            'price' => 3795.99, 
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
            'cover_img' => 'Bulgari_Octo.jpg', 
            'short_description' => 'Bulgari Octo 41mm, 18K Rose Gold and Alligator', 
            'long_description' => 'Inspired by ancient Roman architecture, this octagonal watch features a sleek black lacquered dial to pair with the integrated black alligator leather strap, accented by a warm, 18k rose gold casing that screams Italian luxury.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
           
            'SKU' => 20598356,
            'watch_name' => 'ROLEX EXPLORER II', 
            'in_stock' => 1, 
            'quantity' => 13, 
            'cost' => 23999.99, 
            'price' => 25999.99, 
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
            'cover_img' => 'Rolex_Explorer_II.jpg', 
            'short_description' => 'Rolex Explorer II Automatic 42mm, Stainless Steel Oyster Bracelet', 
            'long_description' => 'For the on-the-go guy, this Rolex, equipped with a calibre 3187 self-winding mechanical movement, also comes equipped with a separate 24-hour hand that lets you keep track of the hours in another time zone. ', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        
        DB::table('watches')->insert([ 
          
            'SKU' => 45982567,
            'watch_name' => 'BELL & ROSS', 
            'in_stock' => 1, 
            'quantity' => 67, 
            'cost' => 1799.99, 
            'price' => 1939.99, 
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
            'cover_img' => 'Bell_and_Ross_Vintage.jpg', 
            'short_description' => 'Bell and Ross Vintage V2-93 Automatic 41mm', 
            'long_description' => 'The black rubber strap of this stainless steel watch provides a sporty feel while the Calibre BR-CAL.303 automatic movement and bi-directional bezel help you keep track of time no matter where your travels take you.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
            
            'SKU' => 89398743,
            'watch_name' => 'IWC PORTUGUESE', 
            'in_stock' => 1, 
            'quantity' => 53, 
            'cost' => 8199.99, 
            'price' => 8999.99, 
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
            'cover_img' => 'IWC_Portuguese_Automatic.jpg', 
            'short_description' => 'IWC Portuguese Automatic Chronograph Silver Dial 40.9 mm Mens Watch IW371480', 
            'long_description' => 'Based on the original 1930s design, this updated classic is the most coveted of the line for a reason: its effortlessly elegant style and the precision of its 79350 calibre self-winding movement with 31 jewels.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        // next 5 will be all category: digital watch --Aina 

        DB::table('watches')->insert([ 
       
            'SKU' => 66301278,
            'watch_name' => 'CHRONOGRAPH', 
            'in_stock' => 1, 
            'quantity' => 89, 
            'cost' => 209.99, 
            'price' => 249.99, 
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
            'cover_img' => 'Chronograph_42_MM.jpg', 
            'short_description' => 'Chronograph 42 MM. The completion of a corporate celebration is typically marked with purchasing the 2020 favourite digital Chronograph watch.', 
            'long_description' => 'While the crisp white dial of this 18k rose gold watch may be a departure from the classic Tiffany & Co. shade, the alligator band and gold poudré numerals still boast the timeless stylishness that made the brand an icon.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
        
            'SKU' => 66302611,
            'watch_name' => 'LONGINES', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'cost' => 199.99, 
            'price' => 299.99, 
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
            'cover_img' => 'Longines_Master_Collection.jpg', 
            'short_description' => 'Longines Master Collection GMT Moonphase 40mm', 
            'long_description' => 'The blue steel hands of this stainless steel and alligator chronograph offers a modern edge to the classic styling of its versatile dial which features sub-dials for the moon phase, date, and a 24 hour indicator.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 66304411,
            'watch_name' => 'ROLEX DAYTONA', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'cost' => 1189.99, 
            'price' => 1299.99, 
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
            'cover_img' => 'Rolex_Daytona.jpg', 
            'short_description' => 'Rolex Daytona 45mm. There’s something magical about a chiming cultured wristwatch, doubly so if its made by TechWatch, whose family of dress watches may be unparalleled.', 
            'long_description' => 'Blue dials have enjoyed a resurgence lately, but green, especially on a staple like a Rolex Daytona, is equally wearable and much more unique.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
        
            'SKU' => 69302611,
            'watch_name' => 'HUEBOLT', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'cost' => 1189.99, 
            'price' => 1299.99, 
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
            'watch_name' => 'EI PRIMERO', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'cost' => 1189.99, 
            'price' => 1299.99, 
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
            'cover_img' => 'El_Primero_Chronomaster.jpg', 
            'short_description' => 'El Primero Chronomaster Automatic Silver Dial Mens Watch', 
            'long_description' => 'Designed from the original 1969 case, this 31 jewel timepiece features twelve hour, thirty minute, and sixty second subdials along with a stainless steel case and alligator leather strap.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        // next 5 will be all category: quartz --Aina 
        DB::table('watches')->insert([ 
         
            'SKU' => 81155511,
            'watch_name' => 'GRIP', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'cost' => 1189.99, 
            'price' => 1299.99,   
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
            'cover_img' => 'Grip_35mm_watch.jpg', 
            'short_description' => 'Grip 35mm watch. Rair continues to surpise and not dissapoint.', 
            'long_description' => 'Named for the skateboard terminology for the way sneakers "grip" the skateboard tape, Guccis unusual watch features three indicator dials.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 81155001,
            'watch_name' => 'PARMIGIANI FLEURIER', 
            'in_stock' => 1, 
            'quantity' => 119, 
            'cost' => 1119.99, 
            'price' => 1219.99,   
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
            'cover_img' => 'Parmigiani_Fleurier_Toric.jpg', 
            'short_description' => 'Parmigiani Fleurier Toric Hemispheres Retrograde 42.8mm', 
            'long_description' => 'The bi-coastal will appreciate that among this watchs plethora of options comes an independently controlled subdial for another time zone. ', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
         
            'SKU' => 10955531,
            'watch_name' => 'CARTIER', 
            'in_stock' => 1, 
            'quantity' => 32, 
            'cost' => 119.99, 
            'price' => 219.99,   
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
            'cover_img' => 'Cartier_Drive_de_Cartier.jpg', 
            'short_description' => 'Cartier Drive de Cartier 40mm, Stainless Steel & Alligator', 
            'long_description' => 'Neither square nor circular, Cartier refers to the shape of their self-winding, steel-cased watch as "cushion-shaped." It utilizes their in-house caliber 1904-PS movement with blued steel hands and a small seconds counter.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


        DB::table('watches')->insert([ 
          
            'SKU' => 10955531,
            'watch_name' => 'LAUREATO', 
            'in_stock' => 1, 
            'quantity' => 32, 
            'cost' => 1319.99, 
            'price' => 2219.99,   
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
            'cover_img' => 'Laureato_Hand_Wind_Mens.jpg', 
            'short_description' => 'Laureato Hand Wind Mens WatchOne of the nicest-looking chronographs and arguably the classic TechWatches dress watch now comes with a self-winding in-house movement that significantly lowers its entry cost.', 
            'long_description' => 'An updated version of the classic 1975 style, this hand-winding movement features a skeleton dial with a 54 hour power reserve and a black ceramic casing and strap.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
           
            'SKU' => 19955666,
            'watch_name' => 'BRACELET', 
            'in_stock' => 1, 
            'quantity' => 561, 
            'cost' => 2319.99, 
            'price' => 3219.99,   
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
            'cover_img' => 'Bracelet_Watch.jpg', 
            'short_description' => 'Bracelet Watch, 40mm first release of 2020 is a new version of its Automatic, which debuted in 2017.', 
            'long_description' => 'For the ultra-minimalist, this all black dial features a Museum dot at 12 o clock.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
            'SKU' => 66302641,
            'watch_name' => 'GEN 5 SMARTWATCH GARRETT', 
            'in_stock' => 1, 
            'quantity' => 379, 
            'cost' => 20994.99, 
            'price' => 22444.99, 
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
            'cover_img' => 'Gen_5_Smartwatch_Garrett.jpeg', 
            'short_description' => 'Gen 5 Smartwatch Garrett HR Stainless Steel', 
            'long_description' => 'Smartwatches powered with Wear OS by Google are compatible with iPhone® and Android™ phones. Wear OS by Google and other related marks are trademarks of Google LLC. Touchscreen smartwatches powered with Wear OS by Google require a phone running Android OS 6.0+ (excluding Go edition) or iOS 10+. Supported features may vary between platforms.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


         DB::table('watches')->insert([ 
            'SKU' => 66302651,
            'watch_name' => 'GEN 5 SMARTWATCH JULIANNA', 
            'in_stock' => 1, 
            'quantity' => 479, 
            'cost' => 20995.99, 
            'price' => 22445.99, 
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
            'cover_img' => 'Gen_5_Smartwatch_Julianna.jpeg', 
            'short_description' => 'Gen 5 Smartwatch Julianna HR Rose Gold-Tone Stainless Steel Mesh', 
            'long_description' => 'Activity Tracker, Control Your Music, Google Pay™, GPS, Heart Rate Tracking, Interchangeable Watch Band, Notifications, Personalise Your Dial, Swimproof', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


         DB::table('watches')->insert([
            
            'SKU' => 22567000,
            'watch_name' => 'COSMOGRAPH DAYTONA', 
            'in_stock' => 1, 
            'quantity' => 200, 
            'cost' => 199.99, 
            'price' => 299.99, 
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
            'cover_img' => 'COSMOGRAPH_DAYTONA.jpg', 
            'short_description' => 'The Oyster Perpetual Cosmograph Daytona is the ultimate tool watch for those with a passion for driving and speed.', 
            'long_description' => 'Introduced in 1963, the Cosmograph Daytona was designed to meet the demands of professional racing drivers. It is an icon forever joined in name and function to the high-performance world of motor sport. More than 50 years after its creation, the Cosmograph Daytona remains in a class of its own among sport chronographs and continues to transcend time.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 


          DB::table('watches')->insert([ 
            'SKU' => 66302661,
            'watch_name' => 'GEN5 SMARTWATCH JULIANNA', 
            'in_stock' => 1, 
            'quantity' => 579, 
            'cost' => 20996.99, 
            'price' => 22446.99, 
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
            'cover_img' => 'Gen5_Smartwatch_Julianna.jpeg', 
            'short_description' => 'Gen 5 Smartwatch Julianna HR Smoke Stainless Steel', 
            'long_description' => 'BTo avoid damage to your watch, only use with included charger. Do not use a USB hub, USB splitter, USB y-cable, battery pack or other peripheral device to charge. Product should be kept more than 20 cm away from implanted medical devices to minimise potential for RF interference. See product insert for full details.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

          DB::table('watches')->insert([ 
            'SKU' => 66302661,
            'watch_name' => 'GOLD CHRONOGRAPH', 
            'in_stock' => 1, 
            'quantity' => 579, 
            'cost' => 20996.99, 
            'price' => 22446.99, 
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
            'cover_img' => 'GOLD_CHRONOGRAPH.jpg', 
            'short_description' => 'GOLD CHRONOGRAPH Stainless Steel', 
            'long_description' => 'Each Benjamin Banneker watch incorporates wood in some way. For the Crossover, African Red Sandalwood is layered over a steel-lated case. ', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


          DB::table('watches')->insert([ 
          
            'SKU' => 24598763,
            'watch_name' => 'VACHERON CONSTANTIN', 
            'in_stock' => 1, 
            'quantity' => 17, 
            'cost' => 6299.99, 
            'price' => 6999.99, 
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
            'cover_img' => 'Vacheron_Constantin.jpg', 
            'short_description' => 'Vacheron Constantin Overseas Automatic 42.5mm', 
            'long_description' => 'With 54 jewels, this transparent-backed stainless steel chronograph features a caliber 5200 movement with a 52 hour power reserve.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);



          DB::table('watches')->insert([ 
            'SKU' => 66302621,
            'watch_name' => 'TOM FORD', 
            'in_stock' => 1, 
            'quantity' => 179, 
            'cost' => 20992.99, 
            'price' => 22442.99, 
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
            'cover_img' => 'Tom_Ford_Watch.jpg', 
            'short_description' => 'Tom Ford Watch Automatic Stainless Steel Mens Watch W5200028', 
            'long_description' => 'Leave it Tom Ford, the master of subtle sex appeal, to design a slim, everyday watch that makes a bold statement.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);


          DB::table('watches')->insert([ 
          
            'SKU' => 20073498,
            'watch_name' => 'OMEGA SPEEDMASTER', 
            'in_stock' => 1, 
            'quantity' => 76, 
            'cost' => 369.99, 
            'price' => 419.99, 
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
            'cover_img' => 'Omega_Speedmaster_Racing.jpg', 
            'short_description' => 'Omega Speedmaster Racing Automatic Chronograph 40mm, Stainless Steel', 
            'long_description' => '60 second, 30 minute, and 12 hour subdials give you all the equipment you need for pin-point precise timing, while the stainless steel case and rubber strap add a sporty edge.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

        DB::table('watches')->insert([ 
          
            'SKU' => 20496720,
            'watch_name' => 'ROLEX COSMOGRAPH', 
            'in_stock' => 1, 
            'quantity' => 69, 
            'cost' => 129.99, 
            'price' => 149.99, 
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
            'cover_img' => 'Rolex_Cosmograph_Daytona.jpg', 
            'short_description' => 'Rolex Cosmograph Daytona 40mm, Stainless Steel Oyster Bracelet', 
            'long_description' => 'First introduced in 1963, the Daytona, true to its name, was designed to meet the needs for pro race drivers with a self-winding calibre 4130 movement and a larger than usual mainspring to enhance its reserve power.', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);

         DB::table('watches')->insert([ 
            'SKU' => 66302631,
            'watch_name' => 'ELMINGTON', 
            'in_stock' => 1, 
            'quantity' => 279, 
            'cost' => 20993.99, 
            'price' => 22443.99, 
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
            'cover_img' => 'Elmington_Emerald.jpg', 
            'short_description' => 'Elmington Emerald Green Watch x Gold - 44mm', 
            'long_description' => 'An oversized Emerald green dial recalls 1960s style with a sleek updated silhouette.',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);
        //mechanical watch ends

          DB::table('watches')->insert([ 
            'SKU' => 66002631,
            'watch_name' => 'TEST WATCH', 
            'in_stock' => 1, 
            'quantity' => 279, 
            'cost' => 20993.99, 
            'price' => 22443.99, 
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
            'cover_img' => 'Elmington_Emerald.jpg', 
            'short_description' => 'TEST Emerald Green Watch x Gold - 44mm', 
            'long_description' => 'An TEST Emerald green dial recalls 1960s style with a sleek updated silhouette.',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);
    }
}
