<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
       // create permissions
       Permission::create(['name' => 'edit articles']);
       Permission::create(['name' => 'delete articles']);
       Permission::create(['name' => 'publish articles']);
       Permission::create(['name' => 'unpublish articles']);

       // create roles and assign created permissions

       // this can be done as separate statements
       $role = Role::create(['name' => 'writer']);
       $role->givePermissionTo('edit articles');

       // or may be done by chaining
       $role = Role::create(['name' => 'moderator'])
           ->givePermissionTo(['publish articles', 'unpublish articles']);

       $role = Role::create(['name' => 'super-admin']);
       $role->givePermissionTo(Permission::all());
    }
}
