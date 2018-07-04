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
    $role_user = Role::where('name', 'user')->first();
    $role_admin  = Role::where('name', 'admin')->first();
    $user = new User();
  
    $user->name = 'User';
   
    $user->email = 'user@example.com';
    $user->password = bcrypt('123456');
    $user->save();
    $user->roles()->attach($role_user);
    $admin = new User();
    $admin->name = 'Manager Name';
    

    $admin->email = 'admin@example.com';
    $admin->password = bcrypt('secret');
    $admin->save();
    $admin->roles()->attach($role_admin);
    }
}
