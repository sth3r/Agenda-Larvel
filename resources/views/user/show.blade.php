<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
</head>
<body>
    @if ($tarefa)
        <h1>{{$tarefa->nome}}</h1>
        <p>{{$tarefa->data}}</p>
    @else
        <p>Tarefas não encontradas! </p>
    @endif
    <a href="/tarefas">&#9664;Voltar</a>
</body>
</html>
