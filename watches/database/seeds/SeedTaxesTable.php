<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon; 

class SeedTaxesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('taxes')->insert([
	        'province' => 'Manitoba', 
	        'GST' => 0.05, 
	        'PST' => 0.07, 
	        'HST' => 0, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Ontario', 
	        'GST' => null, 
	        'PST' => null, 
	        'HST' => 0.13, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]); 

	    DB::table('taxes')->insert([
	        'province' => 'Saskatchewan', 
	        'GST' => 0.05, 
	        'PST' => 0.06, 
	        'HST' => 0.11, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Alberta', 
	        'GST' => 0.05, 
	        'PST' => 0.00, 
	        'HST' => 0.05, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'British Columbia', 
	        'GST' => 0.05, 
	        'PST' => 0.07, 
	        'HST' => 0.12, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'New Brunswick', 
	        'GST' => null , 
	        'PST' => null , 
	        'HST' => 0.15, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Newfoundland and Labrador', 
	        'GST' => null , 
	        'PST' => null , 
	        'HST' => 0.15, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Prince Edward Island', 
	        'GST' => null , 
	        'PST' => null , 
	        'HST' => 0.15, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Quebec', 
	        'GST' => 0.05, 
	        'PST' => 0.0975, 
	        'HST' => 0.1475,
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Yukon', 
	        'GST' => 0.05, 
	        'PST' => 0.00, 
	        'HST' => 0.05, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Nunavut', 
	        'GST' => 0.05, 
	        'PST' => 0.00, 
	        'HST' => 0.05,
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Nova Scotia', 
	        'GST' => null , 
	        'PST' => null , 
	        'HST' => 0.15, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Northwest Territories', 
	        'GST' => 0.05, 
	        'PST' => 0.00, 
	        'HST' => 0.05,
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

    }
}
