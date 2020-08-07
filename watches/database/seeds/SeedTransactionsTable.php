<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeedTransactionsTable extends Seeder
{

	/*
		transaction codes: 

		VISA  --> 11289
		DEBIT --> 00987
		paypal --> 29900
		mastercard --> 78112

	*/

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('transactions')->insert([
         	'order_id' => 1, 
         	'transaction_status' => 1, 
            'response_code' => 112233,
            'auth_code' => '2011-01',
         	'transaction' => 'mock_date', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

         DB::table('transactions')->insert([
         	'order_id' => 2, 
         	'transaction_status' => 1, 
            'response_code' => 112663,
            'auth_code' => '9990-01',
         	'transaction' => 'mock_data', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

         DB::table('transactions')->insert([
         	'order_id' => 3, 
         	'transaction_status' => 1, 
            'response_code' => 109633,
            'auth_code' => '3010-01',
         	'transaction' => 'mock_data', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

         DB::table('transactions')->insert([
         	'order_id' => 4, 
         	'transaction_status' => 1, 
            'response_code' => 112199,
            'auth_code' => '2881-01',
         	'transaction' => 'mock_data', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

         DB::table('transactions')->insert([
         	'order_id' => 5, 
         	'transaction_status' => 1, 
            'response_code' => 112009,
            'auth_code' => '2090-01',
         	'transaction' => 'mock_data', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

         DB::table('transactions')->insert([
         	'order_id' => 6, 
         	'transaction_status' => 1, 
            'response_code' => 112000,
            'auth_code' => '2020-11', 
         	'transaction' => 'mock_data', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

    }
}
