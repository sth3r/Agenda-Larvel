<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
</head>
<body>
    <h1>Tarefas</h1>
    @if ($tarefas->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Data</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($tarefas as $tarefa)
        <tr>
            <td>{{$tarefa->id}}</td>
            <td>{{$tarefa->nome}}</td>
            <td>{{$tarefa->data}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>Produtos não encontrados! </p>
@endif
