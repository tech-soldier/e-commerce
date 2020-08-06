<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //$table->integer('watch_id')->unsigned(); 
            $table->integer('user_id')->unsigned(); 
            $table->string('first_name', 255); 
            $table->string('email', 255); 
            $table->string('billing_address', 255); 
            $table->string('shipping_address', 255); 
            $table->decimal('subtotal', 14,2); 
            $table->integer('tax_id')->unsigned(); 
            $table->decimal('total', 14,2); 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
