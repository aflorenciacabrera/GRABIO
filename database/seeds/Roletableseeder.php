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
        $role->description = 'Admin';
        $role->save();
        $role             = new Role();
        $role->name        = 'user';
        $role->description = 'User';
        $role->save();
    }
}
