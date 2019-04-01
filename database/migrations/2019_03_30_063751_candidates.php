<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Candidates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('state');
            $table->string('city');
            $table->string('email');
            $table->string('gender');
            $table->string('dob');
            $table->string('experience');
            $table->decimal('salary');
            $table->string('jobtitle');
            $table->string('companyname');
            $table->string('industry');
            $table->string('functionalarea');
            $table->year('yearduration');
            $table->string('monthduration');
            $table->string('graduation');
            $table->string('postgraduation');
            $table->string('doctorate');
            $table->string('certificate');
            $table->string('fileupload');
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
        Schema::dropIfExists('candidates');
    
     }
}
