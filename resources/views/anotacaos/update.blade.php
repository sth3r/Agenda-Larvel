<h1>Inserir Anotacao</h1>
<form action="{{route('update',$anotacao->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Titulo:</td>
            <td><input type="text" name="titulo" value="{{$anoacao->titulo}}"/></td>
        </tr>
        <tr>
            <td>Conteudo:</td>
            <td><input type="text" name="conteudo" value="{{$anoacao->conteudo}}"/></td>
        </tr>
        <tr>
            <td>Data:</td>
            <td><input type="text" name="data" value="{{$anoacao->dia}}"/></td>
        </tr>
    </table>
</form>
