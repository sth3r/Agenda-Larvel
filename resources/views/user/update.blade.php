<h1>Atualizar user</h1>
<form action="{{route('update',$user->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="name" value="{{$user->name}}"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="{{$user->name}}"/></td>
        </tr>
        <tr>
            <td>Senha:</td>
            <td><input type="text" name="password" value="{{$user->password}}"/></td>
        </tr>
    </table>
</form>
