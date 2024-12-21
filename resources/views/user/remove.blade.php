<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover tarefa</title>
</head>
<body>
    @if ($tarefa)
        <h1>{{ $tarefa->nome }}</h1>
        <p>{{ $tarefa->data }}</p>
        <table>
            <tr>
                <td>
                    <form action="{{ route('remove',$tarefa->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Remover" />
                    </form>
                </td>
                <td>
                    <a href="/tarefas"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>tarefas não encontrados! </p>
    @endif
    <a href="/tarefas">&#9664;Voltar</a>
</body>
</html>
