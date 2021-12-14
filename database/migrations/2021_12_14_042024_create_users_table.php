<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            //$table->Increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('fullname');
            $table->integer('gender')->nullable();
            $table->string('address')->nullable();
            $table->datetime('dateOfBirth')->nullable();
            $table->string('avatarImg')->nullable();
            $table->string('qrCodeImg')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('email');
            $table->string('idRole');

            $table->primary('username');
            $table->foreign('idRole')->references('id')->on('roles');
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
        Schema::dropIfExists('users');
    }
}
