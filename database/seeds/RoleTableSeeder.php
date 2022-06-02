<?php
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
        $role->name = 'centro';
        $role->description = 'Centro Sercotec';
        $role->save();
        $role = new Role();
        $role->name = 'pyme';
        $role->description = 'Pyme';
        $role->save();
        $role = new Role();
        $role->name = 'proveedor';
        $role->description = 'Proveedor';
        $role->save();
    }
}
