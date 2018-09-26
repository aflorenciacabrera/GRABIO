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
      $m->id_cesion = $request->id_cesion;
      $m->id_fuente = $request->id_fuente;
      $m->naturaleza = $request->naturaleza;
      $m->cantidad = $request->cantidad;
      $m->concentracion = $request->concentracion;
      $m->fecha_entrada = $request->fecha_entrada;
      $m->fecha_salida = $request->fecha_salida;
      $m->localizacion = $request->localizacion;
      $m->diagnostico = $request->diagnostico;
      $m->paciente_id = $request->paciente_id;

      $m->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('deposito'));
      }

}
