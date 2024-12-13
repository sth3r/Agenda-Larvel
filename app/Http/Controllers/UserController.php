<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        echo "oiiii";
        echo 'n/ Essa é a users';
        dd($this);
    }
}
