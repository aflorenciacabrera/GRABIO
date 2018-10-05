<?php

use Illuminate\Database\Seeder;

use grabio\User;
use grabio\Role;


class Usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
    
    $role_admin  = Role::where('name', 'Admin')->first();
    $role_tecnico = Role::where('name', 'Técnico')->first();
    $role_responsable = Role::where('name', 'Responsable')->first();
    $role_investigador = Role::where('name','Investigador')->first();


    $admin = new User();
    $admin->avatar = 'default.jpg';
    $admin->name = 'Manager Name';
    $admin->email = 'admin@example.com';
    $admin->rol = 'Admin';
    $admin->nombre = 'Florencia';
    $admin->apellido = 'Cabrera';
    $admin->telefono = '3795053426';
    $admin->hospital = 'hospital';
    $admin->trabajo = 'trabajo';
    $admin->archivo = 'recibo.pdf';
    $admin->estado = '1';
    $admin->password = bcrypt('123456');
    $admin->save();
    $admin->roles()->attach($role_admin);   
   
    $responsable = new User();
    $responsable->avatar = 'default.jpg';
    $responsable->name='Responsable';
    $responsable->email = 'respo@example.com';
    $responsable->rol = 'Responsable';
    $responsable->nombre = 'Ivan';
    $responsable->apellido = 'Sambrana';
    $responsable->telefono = '3795053430';
    $responsable->hospital = 'hospital';
    $responsable->trabajo = 'trabajo';
    $responsable->archivo = 'recibo.pdf';
    $responsable->estado = '1';
    $responsable->password = bcrypt('123456');
    $responsable->save();
    $responsable->roles()->attach($role_responsable);

    

    $tecnico = new User();
    $tecnico->avatar = 'default.jpg';
    $tecnico->name = 'Tecnico'; 
    $tecnico->email = 'tecnico@example.com';
    $tecnico->rol = 'Técnico';
    $tecnico->nombre = 'Andrea';
    $tecnico->apellido = 'Cabrera';
    $tecnico->telefono = '3795053426';
    $tecnico->hospital = 'hospital';
    $tecnico->trabajo = 'trabajo';
    $tecnico->archivo = 'recibo.pdf';
    $tecnico->estado = '1';
    $tecnico->password = bcrypt('123456');
    $tecnico->save();
    $tecnico->roles()->attach($role_tecnico);

    $investigador = new User();
     $investigador->avatar = 'default.jpg';
    $investigador->name = 'Investigador';
    $investigador->email = 'investi@example.com';
    $investigador->rol = 'Investigador';
    $investigador->nombre = 'Veronica';
    $investigador->apellido = 'Tribbia';
    $investigador->telefono = '3795053426';
    $investigador->hospital = 'hospital';
    $investigador->trabajo = 'trabajo';
    $investigador->archivo = 'recibo.pdf';
    $investigador->estado = '1';
    $investigador->password =bcrypt('123456');
    $investigador->save();
    $investigador->roles()->attach($role_investigador);

     }

}
