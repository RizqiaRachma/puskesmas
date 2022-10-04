<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => 'view-users']);
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);
        Permission::create(['name' => 'show-users']);
        Permission::create(['name' => 'update-profile']);
        Permission::create(['name' => 'change-avatar']);
        Permission::create(['name' => 'change-password']);

        $AdminRole = Role::create(['name' => 'admin']);
        $AdminRole->givePermissionTo('view-users');
        $AdminRole->givePermissionTo('create-users');
        $AdminRole->givePermissionTo('edit-users');
        $AdminRole->givePermissionTo('delete-users');
        $AdminRole->givePermissionTo('show-users');
        $AdminRole->givePermissionTo('update-profile');
        $AdminRole->givePermissionTo('change-avatar');
        $AdminRole->givePermissionTo('change-password');

        $OwnerRole = Role::create(['name' => 'writer']);
        $OwnerRole->givePermissionTo('show-users');
        $OwnerRole->givePermissionTo('update-profile');
        $OwnerRole->givePermissionTo('change-avatar');
        $OwnerRole->givePermissionTo('change-password');

        $MandorRole = Role::create(['name' => 'editor']);
        $MandorRole->givePermissionTo('show-users');
        $MandorRole->givePermissionTo('update-profile');
        $MandorRole->givePermissionTo('change-avatar');
        $MandorRole->givePermissionTo('change-password');

        $SuperAdminRole = Role::create(['name' => 'super-admin']);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        $user->assignRole($AdminRole);

        $user = User::create([
            'name' => 'writer',
            'email' => 'writer@writer.com',
            'password' => bcrypt('writer'),
        ]);
        $user->assignRole($OwnerRole);

        $user = User::create([
            'name' => 'editor',
            'email' => 'editor@editor.com',
            'password' => bcrypt('editor'),
        ]);
        $user->assignRole($MandorRole);

        $user = User::create([
            'name' => 'Adi Abdul Gani',
            'email' => 'just.adi26@gmail.com',
            'password' => bcrypt('@bismillah313'),
        ]);
        $user->assignRole($SuperAdminRole);
    }
}
