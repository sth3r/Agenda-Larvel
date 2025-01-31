<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TarefaStoredRequest;
use App\Http\Requests\TarefaStoreRequest;
use App\Http\Requests\TarefaUpdateRequest;
use App\Http\Resources\TarefaCollection;
use App\Http\Resources\TarefaResource;
use App\Http\Resources\TarefaStoredResource;
use App\Http\Resources\TarefaUpdatedResource;
use App\Models\Tarefa;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new TarefaCollection(Tarefa::all());
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(TarefaStoreRequest $request)
    {
        try {
            return new TarefaStoredResource(Tarefa::create($request->validated()));
        }catch(Exception $error){
            return $this->errorHandler("Erro ao criar nova Tarefa!!", $error);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        return new TarefaResource($tarefa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TarefaUpdateRequest $request, Tarefa $tarefa)
    {
        try{
            $tarefa->update(($request->validated()));
            return new TarefaUpdatedResource($tarefa);
        } catch(Exception $error){
            return $this->errorHandler("Erro ao atualizar Tarefa", $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        try{
            $tarefa->delete();
            return (new TarefaResource($tarefa))->additional(["message"=>"Tarefa removida!!!"]);
        } catch(Exception $error){
            return $this->errorHandler("Erro ao atualizar Tarefa", $error);
        }
    }
}
