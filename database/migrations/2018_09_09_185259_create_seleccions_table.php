<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeleccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seleccions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tecnico_id')->unsigned()->nullable();
            $table->foreign('tecnico_id')->references('id')->on('tecnicos')->onDelete('cascade');

            $table->integer('investigador_id')->unsigned()->nullable();
            $table->foreign('investigador_id')->references('id')->on('investigadors')->onDelete('cascade');

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
        Schema::dropIfExists('seleccions');
    }
}
