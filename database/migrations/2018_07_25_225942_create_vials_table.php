<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('vials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naturaleza');
            $table->string('cantidad');
            $table->string('concentracion');
            $table->string('fecha_entrada');
            $table->string('fecha_salida');
            $table->string('organo');
            $table->string('diagnostico');
            $table->integer('muestra_id')->unsigned();
            $table->foreign('muestra_id')->references('id')->on('muestras')->onDelete('cascade');
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
        Schema::dropIfExists('vials');
    }
}
