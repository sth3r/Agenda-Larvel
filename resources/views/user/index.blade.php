<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de users</title>
</head>
<body>
    <h1>users</h1>
    @if ($users->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Data</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nome}}</td>
            <td>{{$user->data}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>Users não encontrados! </p>
@endif
