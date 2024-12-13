<div>
    <!-- Be present above all else. - Naval Ravikant -->
</div>

<tbody>
    @foreach ($anotacaos as $anotacao)
    <tr>
        <td>{{$anotacao->id}}</td>
        <td>{{$anotacao->Nome}}</td>
        <td>{{$anotacao->data}}</td>
    </tr>
    @endforeach
</tbody>
