<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\muestra;
class VialController extends Controller
{
    //

    public function corte(){
        $muestras = muestra::all();
      return view('viales.corteMuestra', compact('muestras') );
    }
}
