<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::table('favorites', function(Blueprint $table){
            $table->integer('foreign_jobID')->unsigned();
            $table->foreign('foreign_jobID')->references('jobID')->on('job');
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
            $table->dropForeign(['foreign_jobID']);
            $table->dropColumn('foreign_jobID');
        });
    }
}
