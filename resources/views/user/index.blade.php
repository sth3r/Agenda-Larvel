<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de users</title>
</head>
<body>
    <h1>Users</h1>
    @if ($users->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td><a href="/user/{{$user->id}}">{{$user->id}}</a></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('userDelete',$user->id)}}" tittle='Deletar'>&#128465</a>
                <a href="{{route('userEdit',$user->id)}}" tittle='Editar'>&#128497</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <a href="/user">&#9765;Criar</a>
</table>
@else
<p>Users não encontrados! </p>
@endif
