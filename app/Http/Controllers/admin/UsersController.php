<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function ViewUsers()
    {
        $users = User::all();
        return view('Back.Pages.admin.users',[ 'users' => $users ]);
    }
}
