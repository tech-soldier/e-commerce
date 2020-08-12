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
            $table->integer('user_id')->unsigned(); 
            $table->string('full_name', 255); 
            $table->string('email', 255); 
            $table->string('billing_address', 255); 
            $table->string('shipping_address', 255); 
            $table->decimal('subtotal', 14,2); 
            // recently added below
            $table->decimal('GST', 10,2)->nullable(); 
            $table->decimal('PST', 10,2)->nullable(); 
            $table->decimal('HST', 10,2)->nullable(); 
            $table->decimal('shipping', 14,2);
            $table->boolean('transaction_status')->default(false); 
            $table->boolean('shipping_status')->default(false); 
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
