<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon; 

class SeedCategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'category_name' => 'smart', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('categories')->insert([
        	'category_name' => 'luxury', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('categories')->insert([
        	'category_name' => 'mechanical', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('categories')->insert([
        	'category_name' => 'digital', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('categories')->insert([
        	'category_name' => 'quartz', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 
    }
}
