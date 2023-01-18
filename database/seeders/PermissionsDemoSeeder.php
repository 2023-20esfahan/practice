<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class PermissionsDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $editor = Role::firstOrCreate(['name' => 'editor']);
        $usual_user = Role::firstOrCreate(['name' => 'usual_user']);
        $writer = Role::firstOrCreate(['name'=> 'writer']);
        
        $edit_post = Permission::firstOrCreate(['name' => 'edit posts']);
        $create_post = Permission::firstOrCreate(['name' => 'create posts']);
        $delete_post = Permission::firstOrCreate(['name' => 'delete posts']);
        $view_post = Permission::firstOrCreate(['name' => 'view posts']);
        $edit_user = Permission::firstOrCreate(['name' => 'edit users']);
        $create_user = Permission::firstOrCreate(['name' => 'create users']);
        $delete_user = Permission::firstOrCreate(['name' => 'delete users']);
        $view_user = Permission::firstOrCreate(['name' => 'view users']);
        
        $admin_permission =[$edit_post, $edit_user, $delete_post, $delete_user, $create_post, $create_user, $view_user, $view_post];
        $admin->syncPermissions($admin_permission);
        
        $writer->givePermissionTo($create_post);
        $editor->givePermissionTo($edit_post);
        
        
        $user = \App\Models\User::factory()->create([
            'id' => 1,
        ]);
        $user->assignRole($admin);
        
        $users = \App\Models\User::factory();
        foreach($users as $user){
        $user->assignRole($usual_user);
        }
        
        $super_admin = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        
        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'maha',
            'email' => 'maha@example.com',
        ]);
        $user->assignRole($super_admin);
    }
}
