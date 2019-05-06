<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatedatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('candidatedatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('mobile_no');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('state');
            $table->string('city');
            $table->string('gender');
            $table->date('dob');
            $table->string('skills');
            $table->string('experience');
            $table->string('salary');
            $table->string('jobtitle');
            $table->string('companyname');
            $table->string('industry');
            $table->string('duration');
            $table->string('graduation');
            $table->string('postgraduation')->nullable();
            $table->string('doctorate')->nullable();
            $table->string('certificate')->nullable();
            $table->string('resume');
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
        Schema::dropIfExists('candidatedatas');
    }
}
