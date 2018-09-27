<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\cesion;
class CesionController extends Controller
{
    //
    public function cesion(){
      return view('deposito.cesion');
    }

    public function crearCesion(Request $request){
        $c = new cesion;

        $c->LugarTrab= $request->LugarTrab;
        $c->contacto= $request->contacto;
        $c->solicitud= $request->solicitud;
        $c->evaComCien= $request->evaComCien;
        $c->evaluacionCEI= $request->evaluacionCEI;
        $c->acuTranMate= $request->acuTranMate;
        $c->presupuesto= $request->presupuesto;
        $c->factura= $request->factura;
        $c-> save();

        return redirect(url('deposito'));
    }
}
