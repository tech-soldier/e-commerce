<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_watches', function (Blueprint $table) {
            $table->integer('watch_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('tax_id')->unsigned();
            $table->string('watch_name', 255);
            $table->decimal('price', 14,2); 
            $table->integer('quantity'); 
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
        Schema::dropIfExists('order_watches');
    }
}
