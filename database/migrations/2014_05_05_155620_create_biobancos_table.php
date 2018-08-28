<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiobancosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biobancos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto')->nullable(); 
            $table->string('nombreComp');
            $table->string('nombreCor');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo');
            $table->integer('biobanco_id')->unsigned();
            $table->foreign('biobanco_id')->references('id')->on('biobancos')->onDelete('cascade');
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
        Schema::dropIfExists('biobancos');
    }
}
