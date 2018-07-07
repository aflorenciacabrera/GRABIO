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
        $role->name        = 'admin';
        $role->description = 'Administrador';
        $role->save();
        
        $role              = new Role();
        $role->name        = 'responsable';
        $role->description = 'Responsable';
        $role->save();
        
        $role               = new Role();
        $role->name         = 'investigador';
        $role ->description = 'Investigador';
        $role->save(); 

        $role               = new Role();
        $role -> name       = 'tecnico';
        $role->description  = 'Tecnico';
        $role -> save();

    }
}
