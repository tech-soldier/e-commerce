<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeedOrderWatchesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('order_watches')->insert([
            'watch_id' => 1, 
            'order_id' => 1, 
            'tax_id' => 1, 
            'watch_name' => 'Bamity', 
            'price' => 1399.99, 
            'quantity' => 1, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         	
         ]); 

         DB::table('order_watches')->insert([
            'watch_id' => 2, 
            'order_id' => 2, 
            'tax_id' => 1, 
            'watch_name' => 'Vagram', 
            'price' => 1699.99, 
            'quantity' => 1, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()           
         ]); 

         DB::table('order_watches')->insert([
            'watch_id' => 2, 
            'order_id' => 3, 
            'tax_id' => 3, 
            'watch_name' => 'Vagram', 
            'price' => 1699.99, 
            'quantity' => 1, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()           
         ]); 
    }
}
