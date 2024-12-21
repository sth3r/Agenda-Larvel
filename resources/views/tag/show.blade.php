<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag</title>
</head>
<body>
    @if ($tag)
        <h1>{{$tag->nome}}</h1>
    @else
        <p>Tags não encontradas! </p>
    @endif
    <a href="/tags">&#9664;Voltar</a>
</body>
</html>
