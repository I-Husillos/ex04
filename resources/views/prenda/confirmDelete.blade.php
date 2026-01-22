<h1>Eliminar prenda</h1>

<p>¿Estás seguro de que deseas eliminar la prenda <strong>{{ $prenda->nombre }}</strong>?</p>

<form method="POST" action="{{ route('prenda.destroy', $prenda) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
<a href="{{ route('prenda.index') }}">Cancelar</a>
</form>
