<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersPermissions = ['create users', 'edit users', 'delete users'];
        $articlesPermissions = ['create articles', 'edit articles', 'delete articles'];
        $modelsPermissions = ['create models', 'edit models', 'delete models'];
        $permissions = array_merge($usersPermissions, $articlesPermissions, $modelsPermissions);
        foreach ($permissions as $permission) {
            Permission::create([ 'name' => $permission ]);
        }
        $admin = Role::create([ 'name' => 'admin' ]);
        $admin->givePermissionTo($permissions);
        $writer = Role::create([ 'name' => 'writer' ]);
        $writer->givePermissionTo($articlesPermissions);
        $modelsManager = Role::create([ 'name' => 'models manager' ]);
        $modelsManager->givePermissionTo($modelsPermissions);
        $usersManager = Role::create([ 'name' => 'users manager' ]);
        $usersManager->givePermissionTo($usersPermissions);
    }
}
