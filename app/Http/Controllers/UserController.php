<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function list()
	{
        $menuActive = 'USERS';
		$users = User::all();
        return view('users.list', compact('users', 'menuActive'));
	}

    public function show($id)
	{
        $menuActive = 'USERS';
		$user =  User::find($id);
        return view('users.show', compact('user', 'menuActive'));
	}
}
