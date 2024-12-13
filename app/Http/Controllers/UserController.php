<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users', ['users' => User::all()]);
        // return response()->json(User::all());
    }
}
