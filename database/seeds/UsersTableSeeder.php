<?php

use Illuminate\Database\Seeder;
use Model\Models\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'jubasse',
            'first_name' => 'Julien',
            'last_name' => 'Metral',
            'email' => 'contact@julien-metral.fr',
            'password' => bcrypt('1234')
        ]);
        $user->assignRole('admin');
        $admin = User::create([
            'name' => 'admin',
            'first_name' => 'Administrateur',
            'last_name' => 'Système',
            'email' => 'admin@admin.fr',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');
        factory(User::class, 10)->create()->each(function (User $u) {
            $u->assignRole('writer');
        });
        factory(User::class, 2)->create()->each(function (User $u) {
            $u->assignRole('users manager');
        });
        factory(User::class, 5)->create()->each(function (User $u) {
            $u->assignRole('models manager');
        });
    }
}
