<?php

namespace grabio\Http\Controllers;

use grabio\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
 

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
         $users = User::where('rol', 'responsable')->take(10)->get();
          return view('administrador.principal',compact('users'));
       }
           
        if(Auth::user()->hasRole('responsable')){
          

           $users = User::all()->take(10);


        return view('responsable.principal', compact('users'));

        }
        

        if(Auth::user()->hasRole('tecnico')){
            return view('tecnico.principal');
        }
       
        if(Auth::user()->hasRole('investigador')){
            return view('investigador.principal');
        }
            
    }

    public function perfil(){
        if(Auth::user()->hasRole('admin')){
            return view('perfil');
       }
       
           
        if(Auth::user()->hasRole('responsable')){
          return view('perfil');
        }
        

        if(Auth::user()->hasRole('tecnico')){
            return view('perfil');
        }
       
        if(Auth::user()->hasRole('investigador')){
            return view('perfil');
        }
    }
    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */

    public function editarPerfil(Request $request)
      {
        $user =User::findOrFail($request->id);  
        $user->name= $request->name;
        $user->name2= $request->name2;
        $user->apellido= $request->apellido;
        $user->telefono= $request->telefono;

        $user->save();

       // return view("institucion.mostrarCapacidad");
        return redirect(url('/perfil'));
   
      }

      public function update_avatar(Request $request){

      // Handle the user upload of avatar
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/cargas/avatars/'.$filename ) );

        $user =Auth::user();
        $user->avatar = $filename;
        $user->save();
      }

      return redirect(url('/perfil'));

    }

     public function getDashboard()
    {
        $users = User::all();

        return view('responsable.principal', compact('users'));
    }

    
    
}
