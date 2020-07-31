<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeedOrdersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('orders')->insert([
         	'customer_id' => 1, 
            'watch_id' => 1, 
         	'first_name' => 'Milad', 
         	'email_address' => 'milad-dirani@shaw.net', 
         	'billing_address' => '1411 Ashburn st.', 
         	'shipping_address' => '1411 Ashburn st.', 
         	'subtotal' => 1399.99, 
            'GST' => 0.05, 
            'PST' => 0.07, 
            'total' => 1567.99, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
         ]); 

         DB::table('orders')->insert([
            'customer_id' => 1, 
            'watch_id' => 2, 
            'first_name' => 'Milad', 
            'email_address' => 'milad-dirani@shaw.net', 
            'billing_address' => '1411 Ashburn st.', 
            'shipping_address' => '1411 Ashburn st.', 
            'subtotal' => 1699.99, 
            'GST' => 0.05, 
            'PST' => 0.07, 
            'total' => 1903.99, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
         ]); 


         DB::table('orders')->insert([
            'customer_id' => 2, 
            'watch_id' => 2, 
            'first_name' => 'Dawn', 
            'email_address' => 'dawn-baker@bellmts.com', 
            'billing_address' => '88 Hargrave Bay', 
            'shipping_address' => '88 Hargrave Bay', 
            'subtotal' => 1699.99, 
            'GST' => 0.05, 
            'PST' => 0.07, 
            'total' => 1903.99, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
         ]); 
    }
}
