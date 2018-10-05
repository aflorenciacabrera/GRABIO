<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\muestra;
use grabio\vial;
class VialController extends Controller
{
    //

    public function corte(){
        $muestras = muestra::all();
      return view('viales.corteMuestra', compact('muestras') );
    }

     public function crearMuestra (Request $request)
      { 
        $v = new vial; 
        $v->naturaleza = $request->naturaleza;
        $v->cantidad = $request->cantidad;  
        $v->concentracion = $request->concentracion;
        $v->fecha_entrada = $request->fecha_entrada;
        $v->fecha_salida = $request->fecha_salida;
        $v->organo = $request->organo;
        $v->diagnostico = $request->diagnostico;

      $v->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('viales.corteMuestra'));
      }

}
