<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdetails', function (Blueprint $table) {
            $table->increments('c_id');
            $table->string('cname');
            $table->string('slug')->unique();
            $table->string('cemp');
            $table->string('material');
            $table->string('block');
            $table->string('sector');
            $table->string('area');
            $table->string('state');
            $table->integer('phoneno');
            $table->string('email')->unique();
            $table->string('industrytype');
            $table->string('businesstype');
            $table->string('image');
            $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cdetails');
    }
}
