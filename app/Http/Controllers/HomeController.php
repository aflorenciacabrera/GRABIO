<?php

namespace grabio\Http\Controllers;

use grabio\User;
use grabio\paciente;
use grabio\muestra;
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
    protected function guard()
     {
      return Auth::guard('user');
     }
    
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

     public function espera(){
          return view('homeEspera');
        
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

    
    public function logout(){
        Session::flush();
        return redirect('/');
    }

public function activar($tipo,$user){
        if($tipo=='responsable'){
        $user = User::findOrFail($user);
      }
      if ($tipo=='tecnico') {
        $user = User::findOrFail($user);
      }
       if ($tipo=='investigador') {
        $user = User::findOrFail($user);
      }

        $user->estado = 1;
        $user->save();

       return back()->with('activado','Usuario '.$user->name .' activado');

    }
    public function suspender($tipo,$user){
      if($tipo=='responsable'){
        $user = User::findOrFail($user);
      }
      if ($tipo=='tecnico') {
        $user = User::findOrFail($user);
      }
       if ($tipo=='investigador') {
        $user = User::findOrFail($user);
      }
        
        $user->estado = 0;
        $user->save();
return back()->with('suspendido','Usuario '.$user->name .' suspendido');;
      

    }

    public function paciente(){
      return view('paciente.paciente');
    }

    public function pacienteRegistro(){
      return view('paciente.pacienteRegistro');
    }

    public function crearPaciente (Request $request)
      {

         
        $p = new paciente; 

      $p->nombre= $request->nombre;
      $p->apellido= $request->apellido;
      $p->dni= $request->dni;
      $p->direccion= $request->direccion;
      $p->telefono= $request->telefono;
      $p->grupo= $request->grupo;
      $p->factor= $request->factor;
      $p->sexo= $request->sexo;

      $p->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('paciente'));
      }

     public function muestra(){
      return view('muestra.muestra');
    }

    public function muestraRegistro(){
      return view('muestra.muestraRegistro');
    }

    public function crearMuestra (Request $request)
      { 
        $m = new muestra; 
      $m->muestra = $request->muestra;  
      $m->id_cesion = $request->id_cesion;
      $m->id_fuente = $request->id_fuente;
      $m->naturaleza = $request->naturaleza;
      $m->cantidad = $request->cantidad;
      $m->concentracion = $request->concentracion;
      $m->fecha_entrada = $request->fecha_entrada;
      $m->fecha_salida = $request->fecha_salida;
      $m->localizacion = $request->localizacion;
      $m->diagnostico = $request->diagnostico;
      $m->paciente_id = $request->paciente_id;

      $m->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('muestra'));
      }

    public function historico(){
      return view('historico');
    }


}
