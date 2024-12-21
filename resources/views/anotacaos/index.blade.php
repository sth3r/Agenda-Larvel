<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de anotacaos</title>
</head>
<body>
    <h1>Anotacaos</h1>
    @if ($anotacaos->count()>0)
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>titulo</th>
                <th>conteudo</th>
                <th>dia</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($anotacaos as $anotacao)
        <tr>
            <td><a href="/anotacao/{{$anotacao->id}}">{{$anotacao->id}}</a></td>
            <td>{{$anotacao->titulo}}</td>
            <td>{{$anotacao->conteudo}}</td>
            <td>{{$anotacao->dia}}</td>
            <td>
                {{-- <a href="{{route('delete',$anotacao->id)}} title='Deletar'">&#128465</a> --}}
                <a href="{{route('anotacaoDelete',$anotacao->id)}}" tittle='Deletar'>&#128465</a>
                <a href="{{route('anotacaoEdit',$anotacao->id)}}" tittle='Editar'>&#128497</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <a href="/anotacao">&#9765;Criar</a>
</table>
@else
<p>Anotacaos não encontradas! </p>
@endif
