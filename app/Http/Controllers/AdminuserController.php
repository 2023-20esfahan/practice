<?php

namespace App\Http\Controllers;

use App\Models\adminuser;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

$admin = Role::create(['name' => 'admin']);
$editor = Role::create(['name' => 'editor']);
$usual_user = Role::create(['name' => 'usual_user']);
$writer = Role::create(['name'=> 'writer']);

$edit_post = Permission::create(['name' => 'edit posts']);
$create_post = Permission::create(['name' => 'create posts']);
$delete_post = Permission::create(['name' => 'delete posts']);
$view_post = Permission::create(['name' => 'view users']);
$edit_user = Permission::create(['name' => 'edit users']);
$create_user = Permission::create(['name' => 'create users']);
$delete_user = Permission::create(['name' => 'delete users']);
$view_user = Permission::create(['name' => 'view users']);

$admin_permission =[$edit_post, $edit_user, $delete_post, $delete_user, $create_post, $create_user, $view_user, $view_post];
$admin->syncPermissions($admin_permission);

$writer->givePermissionTo($create_post);
$editor->givePermissionTo($edit_post);

class AdminuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('backs.adminusers')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminuser  $adminuser
     * @return \Illuminate\Http\Response
     */
    public function show(adminuser $adminuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminuser  $adminuser
     * @return \Illuminate\Http\Response
     */
    public function edit(adminuser $adminuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminuser  $adminuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminuser $adminuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminuser  $adminuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminuser $adminuser)
    {
        //
    }
}
