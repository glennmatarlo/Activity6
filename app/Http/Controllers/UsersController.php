<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function show($user)
    {
        return User::find($user);
    }
}
