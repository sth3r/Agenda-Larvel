<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnotacaoCollection;
use App\Http\Resources\AnotacaoResource;
use App\Models\Anotacao;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $anotacao = $request->all();
        // $anotacao['importado'] = $request->has('importado');

        if (Anotacao::create($anotacao)) {
            return response()->json('Anotacao Criada!', 201);
        } else {
            return response()->json("Erro ao criar o Anotacao", 500);
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
    public function update(Request $request, Anotacao $anotacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anotacao $anotacao)
    {
        //
    }
}
