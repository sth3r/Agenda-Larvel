<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use App\Http\Requests\AnotacaoStoredRequest;
use App\Http\Requests\AnotacaoStoreRequest;
use App\Http\Requests\AnotacaoUpdateRequest;
use App\Http\Resources\AnotacaoCollection;
use App\Http\Resources\AnotacaoResource;
use App\Http\Resources\AnotacaoStoredResource;
use App\Http\Resources\AnotacaoUpdatedResource;
use App\Models\Anotacao;
// use Dotenv\Exception\ValidationException;
use Exception;
// use Illuminate\Http\Request;

class AnotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AnotacaoCollection(Anotacao::all());
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(AnotacaoStoreRequest $request)
    {
        try {
            return new AnotacaoStoredResource(Anotacao::create($request->validated()));
        }catch(Exception $error){
            return $this->errorHandler("Erro ao criar nova Anotacao!!", $error);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Anotacao $anotacao)
    {
        return new AnotacaoResource($anotacao);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnotacaoUpdateRequest $request, Anotacao $anotacao)
    {
        try{
            $anotacao->update(($request->validated()));
            return new AnotacaoUpdatedResource($anotacao);
        } catch(Exception $error){
            return $this->errorHandler("Erro ao atualizar Anotacao", $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anotacao $anotacao)
    {
        try{
            $anotacao->delete();
            return (new AnotacaoResource($anotacao))->additional(["message"=>"Anotacao removida!!!"]);
        } catch(Exception $error){
            return $this->errorHandler("Erro ao atualizar Anotacao", $error);
        }
    }
}
