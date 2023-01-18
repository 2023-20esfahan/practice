<?php

namespace App\Http\Controllers;

use App\Models\adminuser;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
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
    public function show(adminuser $adminuser, User $user)
    {
        dd($user);
        return view('backs.user')->with('user', $user);
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
