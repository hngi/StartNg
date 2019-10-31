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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->integer('role')->default(0);
            $table->boolean('active')->default(1);
<<<<<<< HEAD:database/migrations/2019_10_29_090030_create_users_table.php
=======
            $table->string('role')->default(0);
            $table->boolean('registercourse')->default(0);
>>>>>>> master:database/migrations/2014_10_12_000000_create_users_table.php
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
