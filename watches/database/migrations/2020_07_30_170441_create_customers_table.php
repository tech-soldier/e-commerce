<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations for the customers table 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->integer('order_id')->unsigned(); 
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('billing_address', 255);
            $table->string('city', 255);
            $table->string('province', 255);
            $table->string('country', 255);
            $table->string('postal_code', 6);
            $table->string('email_address', 255)->unique();
            $table->string('phone_number', 14);
            $table->string('password', 255);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
