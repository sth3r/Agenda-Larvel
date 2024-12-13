<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        // return view('tarefas', ['tarefas' => Tarefa::all()]);
        return view('tarefa.index', ['tarefas'=>Tarefa::all()]);
        // return response()->json(Tarefa::all());
    }

}
