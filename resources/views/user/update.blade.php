<h1>Atualizar Tarefa</h1>
<form action="{{route('update',$tarefa->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="{{$tarefa->nome}}"/></td>
        </tr>
        <tr>
            <td>Data:</td>
            <td><input type="text" name="data" value="{{$tarefa->data}}"/></td>
        </tr>
    </table>
</form>
