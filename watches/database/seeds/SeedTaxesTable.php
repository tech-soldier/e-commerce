<?php

use Illuminate\Database\Seeder;

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
	        'GST' => 0.05, 
	        'PST' => 0.08, 
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



    }
}
