<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
    
=======

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
<<<<<<< HEAD
           
=======
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verifyToken')->nullable();
            $table->boolean('status');
<<<<<<< HEAD
           
=======
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
            $table->rememberToken();
            $table->timestamps();
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
