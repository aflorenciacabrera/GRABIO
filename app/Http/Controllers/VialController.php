<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\muestra;
use grabio\vial;
use DB;
class VialController extends Controller
{
    //

    public function corte(){
        $muestras = muestra::all();
        $viales = vial::all();
      return view('viales.corteMuestra', compact('muestras'),  compact('viales') );
    }

     public function crearvial (Request $request)
      { 
     
       
       for ($i=0; $i < $request->cantidad ; $i++) {       
          $v = new vial; 
        $v->muestra_id = $request->muestra_id;
        $v->naturaleza = $request->naturaleza;
        $v->cantidad = $request->cantidad;  
        $v->concentracion = $request->concentracion;
        $v->fecha_entrada = $request->fecha_entrada;
        $v->fecha_salida = $request->fecha_salida;
        $v->organo = $request->organo;
        $v->diagnostico = $request->diagnostico;

      $v->save();
        }

      return redirect(url('viales/corte'));
      }

       public function operaciones(){
          $muestras = muestra::all();
      return view('operaciones',compact('muestras'));
       }

}
