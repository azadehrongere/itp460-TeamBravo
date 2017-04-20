<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrojansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trojans', function (Blueprint $table) {
            $table->increments('trojansID');
            $table->integer('foreign_usersID')->unsigned();
            $table->foreign('foreign_usersID')->references('id')->on('users');
            $table->string('name');
            $table->string('title');
            $table->string('picture');
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
        Schema::table('trojans', function(Blueprint $table){
            $table->dropForeign(['foreign_usersID']);
        });
        Schema::dropIfExists('trojans');
    }
}
