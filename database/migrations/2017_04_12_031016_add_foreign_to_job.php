<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToJob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //
        Schema::table('job', function($table){
            $table->integer('foreign_companyID')->unsigned();
            $table->foreign('foreign_companyID')->references('companyID')->on('company');

            $table->integer('foreign_fieldID')->unsigned();
            $table->foreign('foreign_fieldID')->references('fieldID')->on('field');

            $table->integer('foreign_levelID')->unsigned();
            $table->foreign('foreign_levelID')->references('levelID')->on('level');

            $table->integer('foreign_sizeID')->unsigned();
            $table->foreign('foreign_sizeID')->references('sizeID')->on('size');
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
        Schema::table('job', function(Blueprint $table){
            $table->dropForeign(['foreign_companyID']);
            $table->dropColumn('foreign_companyID');
            $table->dropForeign(['foreign_fieldID']);
            $table->dropColumn('foreign_fieldID');
            $table->dropForeign(['foreign_levelID']);
            $table->dropColumn('foreign_levelID');
            $table->dropForeign(['foreign_sizeID']);
            $table->dropColumn('foreign_sizeID');
        });
    }
}
