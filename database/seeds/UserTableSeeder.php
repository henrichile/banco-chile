<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = 'Enrique Tapia A.';
        $user->email='enrique@etasoft.cl';
        $user->password= bcrypt('admin2020*/');
        $user->save();
        $user = new User();
        $user->name = 'Pablo Diaz N.';
        $user->email='pablo@rainbowdigital.cl';
        $user->password= bcrypt('admin2020*/');
        $user->save();
        $user = new User();
        $user->name = 'Javi Aranda';
        $user->email='javi@rainbowdigital.cl ';
        $user->password= bcrypt('admin2020*/');
        $user->save();
        $user = new User();
        $user->name = 'Fernando Nuñez Barrientos';
        $user->email='fdo@estalisto.cl';
        $user->password= bcrypt('admin2020*/');
        $user->save();
        $roleuser = User::find(1); // find user with id 1
        $user_superadmin = Role::where('name', 'admin')->first();
        $roleuser->roles()->attach($user_superadmin);
        $roleuser = User::find(2); // find user with id 1
        $user_superadmin = Role::where('name', 'admin')->first();
        $roleuser->roles()->attach($user_superadmin);
        $roleuser = User::find(3); // find user with id 1
        $user_superadmin = Role::where('name', 'admin')->first();
        $roleuser->roles()->attach($user_superadmin);
        $roleuser = User::find(4); // find user with id 1
        $user_superadmin = Role::where('name', 'admin')->first();
        $roleuser->roles()->attach($user_superadmin);
    }
}
