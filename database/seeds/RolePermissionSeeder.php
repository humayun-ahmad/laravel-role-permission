<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Role
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleUser = Role::create(['name' => 'user']);
        //Permission list as array
        $permissions =[

            // Dashboard
            'dashborad.view',

            // blog permission
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approved',
            
            //Admin Permission
            'admin.create',
            'admin.view',
            'admin.edit',
            'admin.delete',
            'admin.approved',

            //Role Permission
            'Role.create',
            'Role.view',
            'Role.edit',
            'Role.delete',
            'Role.approved',

            //Profile Permission
            'profile.view',
            'profile.edit',
        ];

        //Assign Permissions
        // Permission::create(['name' => 'dashboard.view'])
        for ($i=0; $i < count($permissions); $i++) { 
            $permission = Permission::create(['name' => $permissions[$i]]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperAdmin);
        }

    }
}
