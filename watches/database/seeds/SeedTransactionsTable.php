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
         	'transaction_code' => '11289', 
         	'transaction' => 'VISA', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

         DB::table('transactions')->insert([
         	'order_id' => 2, 
         	'transaction_code' => '11289', 
         	'transaction' => 'VISA', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

         DB::table('transactions')->insert([
         	'order_id' => 3, 
         	'transaction_code' => '29900', 
         	'transaction' => 'Paypal', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

         DB::table('transactions')->insert([
         	'order_id' => 4, 
         	'transaction_code' => '78112', 
         	'transaction' => 'mastercard', 
         	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()         
         ]); 

    }
}
