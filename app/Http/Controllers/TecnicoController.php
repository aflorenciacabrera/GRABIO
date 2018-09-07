<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\biobanco;
use grabio\user;

class TecnicoController extends Controller
{
    //

     public function registro()
    {
    	$biobancos = biobanco::all();
    	$users = user::all();
        return view('tecnico.registro', compact('biobancos') , compact('users'));
    }

    
}
