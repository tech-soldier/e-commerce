<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderWatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_watch', function (Blueprint $table) {
            $table->integer('watch_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->string('watch_name', 255);
            $table->decimal('price', 14,2); 
            $table->integer('quantity'); 
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
        Schema::dropIfExists('order_watch');
    }
}
