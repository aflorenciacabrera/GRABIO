<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\User;
use grabio\biobanco;
class InvestigadorController extends Controller
{
    //

    public function registro()
    {
    	$biobancos = biobanco::all();
    	$users = User::all();
        return view('investigador.registro' , compact('biobancos') , compact('users') );
    }

     
}
