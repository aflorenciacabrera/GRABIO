<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\depositante;
class DepositanteController extends Controller
{
    //
    public function depositanteRegistro(){
      return view('deposito.depositanteRegistro');
    }

    public function crearDepositante(Request $request){
        $d = new depositante;

        $d->nombre= $request->nombre;
        $d->correo= $request->correo;
        $d->telefono= $request->telefono;
        $d->nombContac= $request->nombContac;
        $d->avatar= $request->avatar;
        $d->acuerdo= $request->acuerdo;

        $d-> save();

        return redirect(url('deposito'));
    }
}
