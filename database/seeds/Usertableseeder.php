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
    
    $role_admin  = Role::where('name', 'admin')->first();
    $role_tecnico = Role::where('name', 'tecnico')->first();
    $role_responsable = Role::where('name', 'responsable')->first();
    $role_investigador = Role::where('name','investigador')->first();


    $admin = new User();
    $admin->name = 'Manager Name';
    $admin->email = 'admin@example.com';
    $admin->rol = 'admin';
    $admin->estado = '1';
    $admin->password = bcrypt('123456');
    $admin->save();
    $admin->roles()->attach($role_admin);   
   
    $responsable = new User();
    $responsable->name='Responsable';
    $responsable->email = 'respo@example.com';
    $responsable->rol = 'responsable';
    $responsable->estado = '1';
    $responsable->password = bcrypt('123456');
    $responsable->save();
    $responsable->roles()->attach($role_responsable);

    

    $tecnico = new User();
    $tecnico->name = 'Tecnico'; 
    $tecnico->email = 'tecnico@example.com';
    $tecnico->rol = 'tecnico';
    $tecnico->estado = '1';
    $tecnico->password = bcrypt('123456');
    $tecnico->save();
    $tecnico->roles()->attach($role_tecnico);

    $investigador = new User();
    $investigador->name = 'Investigador';
    $investigador->email = 'investi@example.com';
    $investigador->rol = 'investigador';
    $investigador->estado = '1';
    $investigador->password =bcrypt('123456');
    $investigador->save();
    $investigador->roles()->attach($role_investigador);

     }

}
