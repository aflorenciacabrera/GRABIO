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
            'avatar' => 'required|string|max:300',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'rol'=> 'required|string|max:225',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'hospital' => 'required|string|max:255',
            'trabajo' => 'required|string|max:255',
            'archivo' => 'required|string|max:255',
            ' biobanco_id' => 'required|string|max:255',
          
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
            'avatar' => $data['avatar'],
            'name' => $data['name'],
            'email' => $data['email'],
            'rol' => $data['rol'],
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'telefono' => $data['telefono'],
            'hospital' => $data['hospital'],
            'trabajo' => $data['trabajo'],
             'archivo' => $data['archivo'],
               'biobanco_id' => $data['biobanco_id'],
           
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

           
    return $user;
    
       
    }




}
