<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('email');
            $table->string('password', 64);
            $table->string('name');
            $table->boolean('admin');
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
        Schema::drop('users');
    }

}