<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\paciente;

class PacienteController extends Controller
{
    //
    public function pacienteRegistro(){
      
      return view('deposito.pacienteRegistro');
    }

    //Paciente
     public function crearPaciente (Request $request)
      {
        $p = new paciente; 

      $p->nombre= $request->nombre;
      $p->apellido= $request->apellido;
      $p->dni= $request->dni;
      $p->direccion= $request->direccion;
      $p->telefono= $request->telefono;
      // $p->grupo= $request->grupo;
      // $p->factor= $request->factor;
      $p->sexo= $request->sexo;
      $p->consentimiento= $request->consentimiento;

      $p->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('deposito'));
      }
    
}
