<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller 
{
    /**
     * Display the specified resource.
     */
    public function show() 
    {
        $users = User::fastPaginate(10);
        return view('users', compact('users'));
    }
}
