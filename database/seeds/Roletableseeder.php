<?php

use grabio\Role;

use Illuminate\Database\Seeder;


class Roletableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role              = new Role();
        $role->name        = 'Admin';
        $role->description = 'Administrador';
        $role->save();
        
        $role              = new Role();
        $role->name        = 'Responsable';
        $role->description = 'Responsable';
        $role->save();
        
        $role               = new Role();
        $role->name         = 'Investigador';
        $role ->description = 'Investigador';
        $role->save(); 

        $role               = new Role();
        $role -> name       = 'Técnico';
        $role->description  = 'Técnico';
        $role -> save();

    }
}
