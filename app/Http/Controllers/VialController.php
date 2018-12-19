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


    public function editarvial($id){
       $muestras = muestra::all(); 
      $vial = vial::findOrFail($id);
     
      return view('viales.editarCorte',array("vial"=>$vial), compact('muestras')); 
      // return view('viales.editarCorte', compact('muestras'),  compact('viales') );
    }

    public function editar(Request $request, $id){
        $v = vial::findOrFail($id);
        
        $v->naturaleza = $request->naturaleza;
        $v->concentracion = $request->concentracion;
        $v->fecha_entrada = $request->fecha_entrada;
        $v->fecha_salida = $request->fecha_salida;
        $v->organo = $request->organo;
        $v->diagnostico = $request->diagnostico;

        $v->save();
        return redirect(url('viales/corte'));
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

       

    //     public function vial()
    // {
    //      $vial = vial::orderBy('id');//->take(10)->get();->paginate(10)
    //     return view('viales.editarCorte',array('viales.editarCorte'=>$vial));
        
    // }
  public function historico(){
      return view('historico');
    }

    public function operaciones(){
      return view('operaciones');
    }


       

}
