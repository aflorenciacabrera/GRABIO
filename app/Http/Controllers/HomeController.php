<?php

namespace grabio\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
       // $request->user()->authorizeRoles(['user', 'admin']);

       if(Auth::user()->hasRole('admin')){
            return view('administrador.principal');
       }
       
           
        if(Auth::user()->hasRole('responsable')){
          return view('responsable.principal');
        }
        

        if(Auth::user()->hasRole('tecnico')){
            return view('tecnico.principal');
        }
       
        if(Auth::user()->hasRole('investigador')){
            return view('investigador.principal');
        }
            
    }
    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */
    
    
}
