<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('experience', function (Blueprint $table) {
            $table->increments('experienceID');
            $table->integer('foreign_usersID')->unsigned();
            $table->foreign('foreign_usersID')->references('id')->on('users');
            $table->string('title');
            $table->string('company');
            $table->string('description');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('location');
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
        //
        Schema::table('experience', function(Blueprint $table){
            $table->dropForeign(['foreign_usersID']);
        });
        Schema::dropIfExists('experience');
    }
}
