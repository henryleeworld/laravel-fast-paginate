<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller 
{
    public function show() 
    {
        $users = User::fastPaginate(10);
        return view('users', compact('users'));
    }
}
