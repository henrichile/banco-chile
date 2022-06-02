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
         $role->name = 'invitado';
         $role->description = 'Invitado';
         $role->save();
    }
}
