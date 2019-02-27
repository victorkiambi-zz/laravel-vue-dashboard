<?php

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
        $user = new App\User;
        $user->name = 'Samuel Jackson';
        $user->email = 'samueljackson@jackson.com';
        $user->password = bcrypt('samuel1234');
        $user->save();
        $user->roles()->attach(App\Role::where('name', 'user')->first());

        $admin = new App\User;
        $admin->name = 'Neo Ighodaro';
        $admin->email = 'neo@creativitykills.com';
        $admin->password = bcrypt('neo1234');
        $admin->save();
        $admin->roles()->attach(App\Role::where('name', 'admin')->first());
    }
}
