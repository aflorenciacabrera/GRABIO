<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;

use grabio\muestra;
class MuestraController extends Controller
{
    //
      //Muestra

      public function muestraRegistro(){
      return view('deposito.muestraRegistro');
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
      $m->fecha_entrada = $request->fechaE;
      $m->fecha_salida = $request->fechaS;
      $m->localizacion = $request->observaciones;
      $m->diagnostico = $request->diagnostico;
      $m->paciente_id = $request->paciente_id;
      $m->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('deposito'));
      }

}
