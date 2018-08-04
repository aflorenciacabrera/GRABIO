<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *nullable
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proceso_id')->unsigned();
            $table->foreign('proceso_id')->references('id')->on('procesos')->onDelete('cascade');
            $table->integer('muestra_id')->unsigned()->nullable();
            $table->foreign('muestra_id')->references('id')->on('muestras')->onDelete('cascade');
            $table->integer('vial_id')->unsigned()->nullable();
            $table->foreign('vial_id')->references('id')->on('vials')->onDelete('cascade');
            $table->string('es');
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
        Schema::dropIfExists('historicos');
    }
}
