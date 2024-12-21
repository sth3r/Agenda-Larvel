<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return view('tag.index', ['tags' => Tag::all()]);
        // return response()->json(Tag::all());
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        $newTag = $request->all();

        if (Tag::create($newTag) )
            return redirect('/tags');
        else
            dd("Erro ao inserir nov tag!");
    }

    public function show(string $id)
    {
        return view('tag.show',[
            'tag'=> Tag::find($id)
        ]);
    }

    public function edit(string $id)
    {
        $data = ['tag'=>Tag::find($id)];
        return view('tag.edit',$data);
    }

    public function update(Request $request, $id){

        // $dados = $request->all();
        // $dados['importado'] = $request->has('importado');
        $dados = $request->all();
        if(!Tag::find($id)->update($dados))
            dd("Erro!!!");

        return redirect('/tags');
    }

    public function delete($id)
    {
        return view('tag.remove',[
            'tag'=> Tag::find($id)
        ]);
    }

    public function remove(Request $request, $id)
    {
        if($request->confirmar==="Remover")
            if(!Tag::destroy($id))
                dd("erro ao deletar tag $id !");
        return redirect('/tags');
    }
}
