<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->mother_last_name = $request->mother_last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('status',true)->find($id);
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->mother_last_name = $request->mother_last_name;
        $user->email = $request->email;
        $user->save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::destroy($id);
        return $user;
    }
}
