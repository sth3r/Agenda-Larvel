<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Editar tarefa</h1>
    <form action="{{route('tarefaUpdate',$tarefa->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$tarefa->nome}}"/></td>
            </tr>
            <tr>
                <td>Data:</td>
                <td><input type="date" name="data" value="{{$tarefa->data}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar"/>
                    <a href="/tarefas"><button form=cancel >Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
