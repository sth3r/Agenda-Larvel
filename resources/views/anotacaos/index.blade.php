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
                <th>titulo</th>
                <th>conteudo</th>
                <th>dia</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($anotacaos as $anotacao)
        <tr>
            <td>{{$anotacao->titulo}}</td>
            <td>{{$anotacao->conteudo}}</td>
            <td>{{$anotacao->dia}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>Anotacaos não encontradas! </p>
@endif
