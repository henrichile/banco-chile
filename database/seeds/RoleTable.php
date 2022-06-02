<?php
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RoleTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         $role = new Role();
         $role->name = 'admin';
         $role->description = 'Administrator';
         $role->save();
         $role = new Role();
         $role->name = 'kraneo';
         $role->description = 'kraneo';
         $role->save();
         $role = new Role();
         $role->name = 'juradoszn';
         $role->description = 'Jurados Zona Norte';
         $role->save();
         $role = new Role();
         $role->name = 'juradoszc';
         $role->description = 'Jurados Zona Centro';
         $role->save();
         $role = new Role();
         $role->name = 'juradoszs';
         $role->description = 'Jurados Zona Sur';
         $role->save();
         $role = new Role();
         $role->name = 'juradosel';
         $role->description = 'Jurado Seleccionado';
         $role->save();      
         $role = new Role();
         $role->name = 'juradotodos';
         $role->description = 'Jurado Todas las zonas';
         $role->save();
    }
}
