<?php

namespace App\Http\Controllers;

use App\Models\Anotacao;
use Illuminate\Http\Request;

class AnotacaoController extends Controller
{
    public function index()
    {
    //    return response()->json(Anotacao::all());
        // return view('anotacao.index', ['anotacaos'=>Anotacao::all()]);

        return view('anotacaos.index', ['anotacaos' => Anotacao::all()]);
        // return response()->json(Anotacao::all());

    }
}
