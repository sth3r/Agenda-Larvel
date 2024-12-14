<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index', ['users' => User::all()]);
        // return response()->json(User::all());
    }
}
