<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return view('tag.index', ['tags' => Tag::all()]);
        // return response()->json(Tag::all());
    }


}
