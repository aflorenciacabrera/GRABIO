<?php

namespace grabio\Http\Controllers;

use grabio\User;

use grabio\biobanco;
use grabio\seleccion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
 

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
    
    public function principal()
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
     public function subir_imagen(Request $request){
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/cargas/avatars/'.$filename ) );

        //$user =User::findOrFail($user);
        //$user->avatar = $filename;
        dd($avatar);
        \Storage::disk(‘local’)->put($file,  \File::get($file));
      }
       

       return redirect(url('tecnico/registro'));
       
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

   //Deposito
     public function deposito(){
      return view('deposito.deposito');
    }
  
     
    public function historico(){
      return view('historico');
    }

    public function operaciones(){
      return view('operaciones');
    }



    public function crearBiobanco (Request $request)
      {

        $b = new biobanco; 

      $b->foto= $request->foto;
      $b->nombreComp= $request->nombreComp;
      $b->nombreCor= $request->nombreCor;
      $b->direccion= $request->direccion;
      $b->telefono= $request->telefono;
      $b->correo= $request->correo;   
      $b->user_id= $request->user_id;

      $b->save();
     
      return redirect(url('/homeEspera'))->with('activacion','El ADMINISTRADOR del sitio evaluará su solicitud y realizará el alta definitiva.');
      }


      // public function seleccion(Request $request)
      // {

      //   $seleccion = new seleccion;
      //   $seleccion->tecnico_id = $request->tecnico_id;
      //   $seleccion->investigador_id = $request->investigador_id;
      //   $seleccion->biobanco_id = $request->biobanco_id;
      //   $seleccion->save();

      //   $institucion =institucion::findOrFail($request);
       

      //     //Mail::to($institucion)->send(new nuevaSeleccion($institucion));
      //   ///para el flashh
      //   return redirect(url('/productor/buscar'));

      // }


      //Almacenamiento
     public function almacenamiento(){
      return view('almacenamiento.almacenamiento');
    }
    //Armario
    public function armarioRegistro(){
      return view('almacenamiento.armario');
    }
    //Congelador
    public function congeladorRegistro(){
      return view('almacenamiento.congelador');
    }
    //Tanque
    public function tanqueRegistro(){
      return view('almacenamiento.tanque');
    }

    public function posiciones(){
      return view('almacenamiento.posiciones');
    }

    public function corte(){
      return view('viales.corteMuestra');
    }

    

}
