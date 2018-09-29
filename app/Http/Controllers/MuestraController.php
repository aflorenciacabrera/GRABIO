<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\paciente;
use grabio\depositante;
use grabio\muestra;
class MuestraController extends Controller
{
    //
      //Muestra
      public function muestraRegistro(){
         $pacientes = paciente::all();
          $depositantes = depositante::all();
      return view('deposito.muestraRegistro', compact('pacientes'), compact('depositantes'));
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
       $m->depositante_id = $request->depositante_id;
      $m->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('deposito'));
      }

        public function crearPacienteMuestra (Request $request)
      {
        $p = new paciente; 

      $p->nombre= $request->nombre;
      $p->apellido= $request->apellido;
      $p->dni= $request->dni;
      $p->direccion= $request->direccion;
      $p->telefono= $request->telefono;
      $p->sexo= $request->sexo;
      $p->consentimiento= $request->consentimiento;

      $p->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('deposito/muestra'));
      }

      
      public function crearDepositanteMuestra(Request $request){
        $d = new depositante;

        $d->nombre= $request->nombre;
        $d->correo= $request->correo;
        $d->telefono= $request->telefono;
        $d->nombContac= $request->nombContac;
        $d->avatar= $request->avatar;
        $d->acuerdo= $request->acuerdo;

        $d-> save();

        return redirect(url('deposito/muestra'));
    }

}
