<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 50);
            $table->string('other_name', 50);
            $table->string('email_address', 50)->unique();
            $table->string('password', 50);
            $table->boolean('is_super_admin');
            // $table->engine = 'InnoDB'->charset('utf8') ;
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
        Schema::dropIfExists('admin');
    }
}
