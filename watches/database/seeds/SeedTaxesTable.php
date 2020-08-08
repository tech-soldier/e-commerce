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
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Ontario', 
	        'HST' => 0.13, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]); 

	    DB::table('taxes')->insert([
	        'province' => 'Saskatchewan', 
	        'GST' => 0.05, 
	        'PST' => 0.06, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Alberta', 
	        'GST' => 0.05, 
	        'PST' => 0.00, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'British Columbia', 
	        'GST' => 0.05, 
	        'PST' => 0.07, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'New Brunswick', 
	        'HST' => 0.15, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Newfoundland and Labrador', 
	        'HST' => 0.15, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Prince Edward Island', 
	        'HST' => 0.15, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Quebec', 
	        'GST' => 0.05, 
	        'PST' => 0.0975, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Yukon', 
	        'GST' => 0.05, 
	        'PST' => 0.00, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Nunavut', 
	        'GST' => 0.05, 
	        'PST' => 0.00, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Nova Scotia', 
	        'HST' => 0.15, // USES HST
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

	    DB::table('taxes')->insert([
	        'province' => 'Northwest Territories', 
	        'GST' => 0.05, 
	        'PST' => 0.00, 
	        'created_at' => Carbon::now(), 
	        'updated_at' => Carbon::now()
	    ]);

    }
}
