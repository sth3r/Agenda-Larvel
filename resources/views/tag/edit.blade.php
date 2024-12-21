<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Editar tag</h1>
    <form action="{{route('tagUpdate',$tag->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$tag->nome}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar"/>
                    <a href="/tags"><button form=cancel >Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
