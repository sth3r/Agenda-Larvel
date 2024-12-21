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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newTarefa = $request->all();

        if (Tarefa::create($newTarefa) )
            return redirect('/tarefas');
        else
            dd("Erro ao inserir nov tarefa!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('tarefa.show',[
            'tarefa'=> Tarefa::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ['tarefa'=>Tarefa::find($id)];
        return view('tarefa.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){

        // $dados = $request->all();
        // $dados['importado'] = $request->has('importado');
        $dados = $request->all();
        if(!Tarefa::find($id)->update($dados))
            dd("Erro!!!");

        return redirect('/tarefas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        return view('tarefa.remove',[
            'tarefa'=> Tarefa::find($id)
        ]);
    }

    public function remove(Request $request, $id)
    {
        if($request->confirmar==="Remover")
            if(!Tarefa::destroy($id))
                dd("erro ao deletar tarefa $id !");
        return redirect('/tarefas');
    }
}
