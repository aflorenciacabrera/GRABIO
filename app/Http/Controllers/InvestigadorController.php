<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use grabio\User;
class InvestigadorController extends Controller
{
    //

    public function registro()
    {
    	$users = User::all();
        return view('investigador.registro' );
    }

     
}
