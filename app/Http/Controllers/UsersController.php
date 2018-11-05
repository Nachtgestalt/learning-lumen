<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    function index () {
//        $user = new User();
//        $user->name = 'Luis Angel';
//        $user->email = 'luis@test.com';
        $users = User::all();
        return response()->json([$users], 200);
    }
}
