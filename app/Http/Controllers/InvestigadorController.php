<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;

class InvestigadorController extends Controller
{
    //

    public function registro()
    {
        return view('investigador.registro' );
    }

     public function perfil()
    {
        return view('investigador.perfil' );
    }
}
