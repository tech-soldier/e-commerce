<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class SeedAdminsTable extends Seeder
{
    /**
     * Run the database seeds for Admin table
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
        	'admin_email' => 'pseudo-class@gmail.com', 
        	'password' => 'mypass', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 
    }
}
