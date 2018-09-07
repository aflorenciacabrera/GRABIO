<?php

use Illuminate\Database\Seeder;
use grabio\biobanco;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

     // La creación de datos de roles debe ejecutarse primero
    $this->call(Roletableseeder::class);
    // Los usuarios necesitarán los roles previamente generados
    $this->call(Usertableseeder::class);

    self::seedBiobancos();
     $this->command->info('Tabla biobanco inicializada con datos!');
    }

    private function  seedBiobancos(){
        DB::table('biobancos')->delete();

        $b = new biobanco;
      $b->foto= 'default.jpg';
      $b->nombreComp= 'Flo';
      $b->nombreCor= 'flopy';
      $b->direccion= 'Barrio';
      $b->telefono=' 378';
      $b->correo= 'aflo@gmail.com';   
      $b->user_id= 2;

      $b->save();

       
    }
}
