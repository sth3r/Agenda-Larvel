<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserStoredRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResourceCollection;
use App\Http\Resources\UserStoredResource;
use App\Http\Resources\UserUpdatedResource;
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
        return new UserResourceCollection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        try {
            return (new UserStoredResource(User::create($request->validated())))
                ->additional(['message'=>'Usuario criado com sucesso!!!']);
        }catch(Exception $error){
            return $this->errorHandler("Erro ao criar novo User!!", $error);
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
    public function update(UserUpdateRequest $request, User $user)
    {
        try{
            $user->update(($request->validated()));
            return new UserUpdatedResource($user);
        } catch(Exception $error){
            return $this->errorHandler("Erro ao atualizar User", $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try{
            $user->delete();
            return (new UserResource($user))->additional(["message"=>"User removido!!!"]);
        } catch(Exception $error){
            return $this->errorHandler("Erro ao atualizar User", $error);
        }
    }
}
