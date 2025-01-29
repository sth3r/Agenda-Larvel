<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UserCollection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // $request->validate(["preco" => "required"]);
            $user = $request->all([
                "nome" => ["required"],
                "email" => ["unique:users, email_address"],
                "password"=> ["required", "min:8"],
                ]);
            // $user['email'] = $request->has('importado');
            User::create($user);
            return response()->json('User Criado!', 201);
        } catch (Exception $error) {
            $httpStatus = 500;
            if($error instanceOf ValidationException) $httpStatus=422;
            return response()->json($error->getMessage(),$httpStatus);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
