<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLastForeignToJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('job', function(Blueprint $table){
        // job pay -> FOREIGN KEY
            $table->integer('foreign_jobPayID')->nullable()->unsigned();
            $table->foreign('foreign_jobPayID')->references('jobPayID')->on('jobPay');
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
            $table->dropForeign(['foreign_jobPayID']);
            $table->dropColumn('foreign_jobPayID');
        });
    }
}
