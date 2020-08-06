<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchesTable extends Migration
{
    /**
     * Run the migrations for the primary table 'watches'
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {

            $table->id();
            $table->integer('SKU'); 
            $table->string('watch_name', 255);
            $table->tinyInteger('in_stock');
            $table->integer('quantity');
            $table->decimal('price', 14, 2);
            $table->decimal('cost', 14,2);
            $table->string('material', 255);
            $table->string('main_color', 255);
            $table->string('movement', 255);
            $table->string('gender', 255);
            // this is the FK which is a PK in the categories table
            $table->integer('category_id')->unsigned();
            $table->string('diameter', 255);
            $table->string('strap_width', 255);
            $table->string('strap_length', 255);
            $table->string('weight', 255);
            $table->string('water_resistant', 255);
            $table->string('cover_img', 255);
            $table->text('short_description');
            $table->longText('long_description');
            $table->timestamps();
            // or this option below
            // $table->dateTime('created_at', 0);
            // $table->dateTime('updated_at', 0);

            // this is for the soft delete
            //$table->enum('is_deleted', ['true', 'false']);
            // or this option
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
        Schema::dropIfExists('watches');
    }
}
