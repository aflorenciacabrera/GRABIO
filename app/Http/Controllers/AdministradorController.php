<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //

    public function perfil()
    {
        return view('administrador.perfil' );
    }
}
