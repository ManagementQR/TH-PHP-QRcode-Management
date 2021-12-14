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
            $table->integer('gender');
            $table->string('address');
            $table->datetime('dateOfBirth');
            $table->string('avatarImg');
            $table->string('qrCodeImg');
            $table->string('phoneNumber');
            $table->string('email');

            $table->primary('username');
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
