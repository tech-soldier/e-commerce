<?php

use Illuminate\Database\Seeder;

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
         	// 'customer_id' => 1, 
         	// 'first_name' => 'Milad', 
         	// 'email_address' => 'milad-dirani@shaw.net', 
         	// 'billing_address' => '1411 Ashburn st.', 
         	// 'shipping_address' => '1411 Ashburn st.', 
         	// ''


         ]); 
    }
}
