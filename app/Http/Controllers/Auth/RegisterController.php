<?php

namespace grabio\Http\Controllers\Auth;

use grabio\User;
use grabio\Role;
use grabio\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     
     
     protected $redirectTo = '/principal';
         
        
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
     {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'rol'=> 'required|string|max:225',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \grabio\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'rol' => $data['rol'],
            'password' => Hash::make($data['password']),
            
        ]);
        switch ($data['rol']) {
            case 'admin':
             $user
                ->roles()
                ->attach(Role::where('name', 'admin')->first());
            break;

            case 'responsable':
             $user
                ->roles()
                ->attach(Role::where('name', 'responsable')->first());
            break;
            

           case 'investigador':
               $user
                ->roles()
                ->attach(Role::where('name', 'investigador')->first());
            break;

            case 'tecnico':
                $user
                ->roles()
                ->attach(Role::where('name', 'tecnico')->first());
            break;
        }

         Session::flash('registro', 'Tu usuario ha sido registrado con éxito. El administrador del sitio evaluará tu solicitud y realizará el alta definitiva. Te avisaremos con un correo electrónico.');

    return $user;
    
        
    }




}
