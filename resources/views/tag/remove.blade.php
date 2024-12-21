<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover tag</title>
</head>
<body>
    @if ($tag)
        <h1>{{ $tag->nome }}</h1>
        <table>
            <tr>
                <td>
                    <form action="{{ route('tagRemove',$tag->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Remover" />
                    </form>
                </td>
                <td>
                    <a href="/tags"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>tags não encontrados! </p>
    @endif
    <a href="/tags">&#9664;Voltar</a>
</body>
</html>
