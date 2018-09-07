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
            $table->string('avatar'); 
            $table->string('name');
            $table->string('email');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('rol');
            $table->string('telefono');
            $table->string('hospital');
            $table->string('trabajo');
            $table->string('archivo');
            $table->string('password');
            $table->boolean('estado')->default(false);
            
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
        Schema::dropIfExists('users');
    }
}
