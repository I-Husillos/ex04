@include('layout.menu')
<h1>Editar prenda</h1>
<form action="{{ route('prenda.update', $prenda->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" value="{{ $prenda->nombre }}">
    <input type="text" name="descripcion" value="{{ $prenda->descripcion }}">
    <input type="number" step="0.01" name="precio" value="{{ $prenda->precio }}">
    <button type="submit">Guardar</button>
</form>
