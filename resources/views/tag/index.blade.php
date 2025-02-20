<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tags</title>
</head>
<body>
    <h1>Tags</h1>
    @if ($tags->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($tags as $tag)
        <tr>
            <td><a href="/tag/{{$tag->id}}">{{$tag->id}}</a></td>
            <td>{{$tag->nome}}</td>
            <td>
                <a href="{{route('tagDelete',$tag->id)}}" tittle='Deletar'>&#128465</a>
                <a href="{{route('tagEdit',$tag->id)}}" tittle='Editar'>&#128497</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <a href="/tag">&#9765;Criar</a>
</table>
@else
<p>Tags não encontradas! </p>
@endif
