<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        // echo "oiiii";
        // echo 'n/ Essa é a tarefas';
        // dd($this);

        return view('tarefa.index', ['tarefas'=>Tarefa::all()]);
    }

}
