<h1>Atualizar Tag</h1>
<form action="{{route('update',$tag->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="{{$tag->nome}}"/></td>
        </tr>
    </table>
</form>
