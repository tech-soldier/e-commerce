<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeedOrderWatchTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('order_watch')->insert([
            'watch_id' => 1, 
            'order_id' => 1, 
            'watch_name' => 'Bamity', 
            'price' => 1399.99, 
            'quantity' => 1, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         	
         ]); 

         DB::table('order_watch')->insert([
            'watch_id' => 2, 
            'order_id' => 1, 
            'watch_name' => 'Vagram', 
            'price' => 1699.99, 
            'quantity' => 2, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()           
         ]); 

         DB::table('order_watch')->insert([
            'watch_id' => 2, 
            'order_id' => 3, 
            'watch_name' => 'Vagram', 
            'price' => 1699.99, 
            'quantity' => 1, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()           
         ]); 

         DB::table('order_watch')->insert([
            'watch_id' => 3, 
            'order_id' => 4, 
            'watch_name' => 'Quo Lux', 
            'price' => 599.99, 
            'quantity' => 1, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()           
         ]); 

         DB::table('order_watch')->insert([
            'watch_id' => 4, 
            'order_id' => 5, 
            'watch_name' => 'Alphazap', 
            'price' => 199.99, 
            'quantity' => 1, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()           
         ]); 

         DB::table('order_watch')->insert([
            'watch_id' => 4, 
            'order_id' => 6, 
            'watch_name' => 'Alphazap', 
            'price' => 199.99, 
            'quantity' => 1, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()           
         ]); 
    }
}
