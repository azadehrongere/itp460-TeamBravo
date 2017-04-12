<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('jobID');
            $table->string('title');
            $table->string('description');
            $table->string('location');
            // company ID -> FOREIGN KEY
            //
            // Field ID -> FOREIGN KEY
            //
            // level ID -> FOREIGN KEY
            //
            // size ID -> FOREIGN KEY
            //
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
        Schema::dropIfExists('job');
    }
}
