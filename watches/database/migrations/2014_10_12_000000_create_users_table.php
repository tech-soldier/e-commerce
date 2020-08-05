<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * This will be called the customers table later on 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            //$table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //$table->id('user_id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('billing_address', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('province', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('postal_code', 6)->nullable();
            //$table->string('email_address', 255)->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number', 14)->nullable();
            //$table->string('password', 255);
            //$table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
