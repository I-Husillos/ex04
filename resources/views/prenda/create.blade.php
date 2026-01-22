@include('layout.menu')
<h1>Nueva prenda</h1>

<form action="{{ route('prenda.store') }}" method="post">
    @csrf
    @method('POST')
    <input type="text" name="nombre" placeholder="Nombre de la prenda" value="{{ old('nombre') }}">
    <textarea name="descripcion" placeholder="Descripción de la prenda">{{ old('descripcion') }}</textarea>
    <input type="number" step="0.01" name="precio" placeholder="Precio de la prenda" value="{{ old('precio') }}">
    <button type="submit">Guardar</button>
</form>