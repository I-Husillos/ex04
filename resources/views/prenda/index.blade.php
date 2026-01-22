@include('layout.menu')
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    @foreach ($prendas as $prenda)
    <tr>
        <td><a href="{{ route('prenda.show', $prenda->id) }}">{{ $prenda->nombre }}</a></td>
        <td><a href="{{ route('prenda.edit', $prenda->id) }}">Editar</a></td>
        <td><a href="{{ route('prenda.confirmDelete', $prenda->id) }}">Eliminar</a></td>
    </tr>
    @endforeach

</table>