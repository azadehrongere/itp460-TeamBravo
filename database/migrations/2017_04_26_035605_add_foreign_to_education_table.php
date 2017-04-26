<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('education', function(Blueprint $table){
            $table->integer('foreign_usersID')->unsigned();
            $table->foreign('foreign_usersID')->references('id')->on('users');
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
        Schema::table('education', function(Blueprint $table){
            $table->dropForeign(['foreign_usersID']);
        });
    }
}
