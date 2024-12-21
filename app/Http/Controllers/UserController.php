<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index', ['users' => User::all()]);
        // return response()->json(User::all());
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $newUser = $request->all();

        if (User::create($newUser) )
            return redirect('/users');
        else
            dd("Erro ao inserir nov user!");
    }

    public function show(string $id)
    {
        return view('user.show',[
            'user'=> User::find($id)
        ]);
    }

    public function edit(string $id)
    {
        $data = ['user'=>User::find($id)];
        return view('user.edit',$data);
    }

    public function update(Request $request, $id){

        // $dados = $request->all();
        // $dados['importado'] = $request->has('importado');
        $dados = $request->all();
        if(!User::find($id)->update($dados))
            dd("Erro!!!");

        return redirect('/users');
    }

    public function delete($id)
    {
        return view('user.remove',[
            'user'=> User::find($id)
        ]);
    }

    public function remove(Request $request, $id)
    {
        if($request->confirmar==="Remover")
            if(!User::destroy($id))
                dd("erro ao deletar user $id !");
        return redirect('/users');
    }
}
