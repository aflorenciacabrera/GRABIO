<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\paciente;
use grabio\muestra;
class MuestraController extends Controller
{
    //
      //Muestra

      public function muestraRegistro(){
         $pacientes = paciente::all();
      return view('deposito.muestraRegistro', compact('pacientes'));
    }

    public function crearMuestra (Request $request)
      { 
        $m = new muestra; 
      $m->muestra = $request->muestra;  
      $m->organo = $request->organo;
      $m->fechaCiru = $request->fechaCiru;
      $m->naturaleza = $request->naturaleza;
      $m->capd = $request->capd;
      $m->cantidad = $request->cantidad;
      $m->concentracion = $request->concentracion;
      $m->fechaE = $request->fechaE;
      $m->fechaS = $request->fechaS;
      $m->observaciones = $request->observaciones;
      $m->diagnostico = $request->diagnostico;
      $m->paciente_id = $request->paciente_id;
      $m->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('deposito'));
      }

}
