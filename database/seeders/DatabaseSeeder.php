<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Permission::create(['name' => 'edit articles']);
       Permission::create(['name' => 'delete articles']);
       Permission::create(['name' => 'publish articles']);
       Permission::create(['name' => 'unpublish articles']);

      //  // create roles and assign created permissions

      //  // this can be done as separate statements
       $role = Role::create(['name' => 'writer']);
      //  $role->givePermissionTo('edit articles');

      //  // or may be done by chaining
      //  $role = Role::create(['name' => 'moderator'])
      //      ->givePermissionTo(['publish articles', 'unpublish articles']);

      //  $role = Role::create(['name' => 'super-admin']);
      //  $role->givePermissionTo(Permission::all());
    }
}
