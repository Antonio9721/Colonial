@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Produtos')
@section('content')

<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Registro de Productos</h4></div>
  </center>
<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('productos.create') }}">Agregar Producto</a></div>
<div class="col-6">
</div>
  <div class="btn-group col-4" role="group" aria-label="Basic example">
      <a href="{{ route('productos.pdf') }}" class="btn btn-danger">PDF</a>
      <a href="/productosXLS" class="btn btn-dark">XLS</a>
      <a href="/productosCSV" class="btn btn-success">CSV</a>
    </div>
</div>
<br>

@forelse($productos as $producto)

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://www.radiohouse.hn/wp-content/uploads/2017/07/La-importanacia-del-Caf%C3%A9-en-M%C3%A9xico.jpg" width="336" height="286">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $producto->nombre }}</b></h5>
        <p class="card-text"><b>Tipo: </b>  {{ $producto->tipo }} <b>Cantidad Producida:</b> {{ $producto->cantidad }}</p>
        <p class="card-text"><b>Precio:</b> {{ $producto->precio }} <b>Dinero Invertido: </b> {{ $producto->inversion }}</p>
            <p class="card-text"><b>Ganancia Obtenida</b> {{ $producto->ganancia }}</p>
            <p class="card-text"><b>Descripción del Producto:</b> {{ $producto->descripcion }} </p>
        <form action="{{ route('productos.destroy', $producto->id) }}" method="post">
      <a type="submit" class="btn btn-success" href="{{ route('productos.show', $producto->id) }}">Ver</a>
      <a type="submit" class="btn btn-primary" href="{{ route('productos.edit', $producto->id) }}">Editar</a>
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form> 
      </div>
    </div>
  </div>
</div>
</center>


@empty
<div><h3>No hay productos registrados en la base de datos</h3></div>
@endforelse

<center>
{{$productos->links() }}
</center>


@endsection