@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Almacenes')
@section('content')

<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Listado de Almacenes</h4></div>
  </center>
<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('almacens.create') }}">Agregar Almacen</a></div>

<div class="col-6">
</div>
  <div class="btn-group col-4" role="group" aria-label="Basic example">
      <a href="{{ route('almacens.pdf') }}" class="btn btn-danger">PDF</a>
      <a href="/almacensXLS" class="btn btn-dark">XLS</a>
      <a href="/almacensCSV" class="btn btn-success">CSV</a>
    </div>
</div>
<br>

@forelse($almacens as $almacen)

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://media-cdn.tripadvisor.com/media/photo-s/11/69/2c/f6/ientrale-matias-que-de.jpg" 
      width="336" height="286">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $almacen->nombre }}</b></h5>
        <p class="card-text"><b>Fruto Cosechado: </b>{{ $almacen->ubicacion }} <b>Producto Almacenado: </b> {{ $almacen->producto }}</p>
        <p class="card-text"><b>Nombre del Encargado: </b> {{ $almacen->nencargado }} {{ $almacen->aencargado }}</p>
            <p class="card-text"><b>Hora de Apertura:</b> {{ $almacen->habierto }}</p>
            <p class="card-text"><b>Hora de Cierre:</b> {{ $almacen->hcerrado }} </p>
        <form action="{{ route('almacens.destroy', $almacen->id) }}" method="post">
      <a type="submit" class="btn btn-success" href="{{ route('almacens.show', $almacen->id) }}">Ver</a>
      <a type="submit" class="btn btn-primary" href="{{ route('almacens.edit', $almacen->id) }}">Editar</a>
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
<div><h3>No hay almacenes registrados en la base de datos</h3></div>
@endforelse

<center>
{{$almacens->links() }}
</center>


@endsection