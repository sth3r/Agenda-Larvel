<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    @if ($user)
        <h1>{{$user->name}}</h1>
        <p>{{$user->email}}</p>
    @else
        <p>users não encontrados! </p>
    @endif
    <a href="/users">&#9664;Voltar</a>
</body>
</html>
