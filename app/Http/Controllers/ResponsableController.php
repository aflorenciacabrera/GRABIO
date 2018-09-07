<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
 use grabio\User;
 use grabio\biobanco;

class ResponsableController extends Controller
{
    //

     
 public function registro()
    {
        return view('responsable.registro' );
    }

    public function biobanco()
    {
        return view('responsable.biobanco' );
    }



 
}


