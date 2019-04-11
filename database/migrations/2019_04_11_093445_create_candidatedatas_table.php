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
            $table->bigInteger('mobile_no');
            $table->string('state');
            $table->string('city');
            $table->string('email');
            $table->string('gender');
            $table->date('dob');
            $table->string('experience');
            $table->string('salary');
            $table->string('jobtitle');
            $table->string('companyname');
            $table->string('industry');
            $table->string('duration');
            $table->string('graduation');
            $table->string('postgraduation');
            $table->string('doctorate');
            $table->string('certificate');
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
