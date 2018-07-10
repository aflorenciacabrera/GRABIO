<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    //

     public function registro()
    {
        return view('tecnico.registro' );
    }

    public function perfil()
    {
        return view('tecnico.perfil' );
    }
}
