<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username');
            $table->string('headline');
            $table->string('profilePic');

            $table->string('studentDegree');

            $table->text('companyDescription');

            

            $table->boolean('companyOrNot');
            $table->integer('jobsCreated');
            
            $table->rememberToken();
            $table->timestamps();


// looks like we might need 30+ columns for this... like 5 columns for each experience? check the google doc -matt


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
