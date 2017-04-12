<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('favorites', function (Blueprint $table) {
            $table->increments('favoritesID');
            $table->integer('foreign_usersID')->unsigned();
            $table->foreign('foreign_usersID')->references('id')->on('users');
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
        //
        Schema::table('favorites', function(Blueprint $table){
            $table->dropForeign(['foreign_usersID']);
        });
        Schema::dropIfExists('favorites');
    }
}
