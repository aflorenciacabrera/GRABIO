<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cesions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LugarTrab');
            $table->string('contacto');
            $table->string('solicitud');
            $table->string('evaComCien');
            $table->string('evaluacionCEI');
            $table->string('acuTranMate');
            $table->string('presupuesto');
             $table->string('factura');
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
        Schema::dropIfExists('cesions');
    }
}
