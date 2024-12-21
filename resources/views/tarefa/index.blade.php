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
            <td><a href="/tarefa/{{$tarefa->id}}">{{$tarefa->id}}</a></td>
            <td>{{$tarefa->nome}}</td>
            <td>{{$tarefa->data}}</td>
            <td>
                {{-- <a href="{{route('delete',$anotacao->id)}} title='Deletar'">&#128465</a> --}}
                <a href="{{route('tarefaDelete',$tarefa->id)}}" tittle='Deletar'>&#128465</a>
                <a href="{{route('tarefaEdit',$tarefa->id)}}" tittle='Editar'>&#128497</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <a href="/tarefa">&#9765;Criar</a>
</table>
@else
<p>Tarefas não encontradas! </p>
@endif
