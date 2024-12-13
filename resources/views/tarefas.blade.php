<div>
    <!-- Be present above all else. - Naval Ravikant -->
</div>
<body>
    <h1>Tarefas</h1>
    @if ($tarefas->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Data</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($tarefas as $tarefa)
        <tr>
            <td>{{$tarefa->id}}</td>
            <td>{{$tarefa->nome}}</td>
            <td>{{$tarefa->data}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>Produtos não encontrados! </p>
@endif
