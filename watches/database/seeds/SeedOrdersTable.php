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

         	'user_id' => 1,
         	'full_name' => 'Milad',
         	'email' => 'milad-dirani@shaw.net',
         	'billing_address' => '1411 Ashburn st.',
         	'shipping_address' => '1411 Ashburn st.',
         	'subtotal' => 1399.99,
            'GST' => 0.05, 
            'PST' => 0.07,
            'shipping' => 11.99,
            'transaction_status' => 0,
            'total' => 1567.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

        DB::table('orders')->insert([

            'user_id' => 2,
            'full_name' => 'Milad',
            'email' => 'techwatch7@gmail.com',
            'billing_address' => '141187 Ashburn st.',
            'shipping_address' => '141187 Ashburn st.',
            'subtotal' => 1699.99,
            'GST' => 0.05,
            'PST' => 0.07,
            'shipping' => 11.99,
            'transaction_status' => 1,
            'total' => 1903.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

        DB::table('orders')->insert([

            'user_id' => 3,
            'full_name' => 'Dawn',
            'email' => 'dawn-baker@bellmts.com',
            'billing_address' => '88 Hargrave Bay',
            'shipping_address' => '88 Hargrave Bay',
            'subtotal' => 1699.99,
            'GST' => 0.05,
            'PST' => 0.06,
            'shipping' => 9.99,
            'transaction_status' => 1,
            'total' => 1886.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

        DB::table('orders')->insert([

            'user_id' => 4,
            'full_name' => 'Inna',
            'email' => 'inna-solda@gmail.com',
            'billing_address' => '12 Abbots Cresent',
            'shipping_address' => '12 Abbots Cresent',
            'subtotal' => 599.99,
            'GST' => 0.05,
            'PST' => 0.07,
            'shipping' => 11.99,
            'transaction_status' => 1,
            'shipping_status' => 1,
            'total' => 671.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

        DB::table('orders')->insert([

            'user_id' => 4,
            'full_name' => 'Inna',
            'email' => 'inna-solda@gmail.com',
            'billing_address' => '12 Abbots Cresent',
            'shipping_address' => '12 Abbots Cresent',
            'subtotal' => 199.99,
            'GST' => 0.05,
            'PST' => 0.07,
            'shipping' => 11.99,
            'transaction_status' => 1,
            'shipping_status' => 1,
            'total' => 223.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

        DB::table('orders')->insert([

            'user_id' => 5,
            'full_name' => 'Alexandr',
            'email' => 'alex-the-great@gmail.com',
            'billing_address' => '43 Inkster st',
            'shipping_address' => '43 Inkster st',
            'subtotal' => 199.99,
            'GST' => 0.05,
            'PST' => 0.00,
            'shipping' => 11.99,
            'transaction_status' => 1,
            'shipping_status' => 1,
            'total' => 209.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

        DB::table('orders')->insert([

            'user_id' => 8,
            'full_name' => 'Aina Ramos',
            'email' => 'ainaramos14@gmail.com',
            'billing_address' => '187 Banning',
            'shipping_address' => '187 Banning',
            'subtotal' => 199.99,
            'HST' => 0.15, 
            'shipping' => 11.99,
            'transaction_status' => 1,
            'shipping_status' => 1,
            'total' => 209.99,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


    }
}
