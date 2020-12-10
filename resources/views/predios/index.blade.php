@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Predios')
@section('content')


<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Listado de Predios</h4></div>
  </center>
<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('predios.create') }}">Agregar Predio</a></div>

<div class="col-6">
</div>
  <div class="btn-group col-4" role="group" aria-label="Basic example">
      <a href="{{ route('predios.pdf') }}" class="btn btn-danger">PDF</a>
      <a href="/prediosXLS" class="btn btn-dark">XLS</a>
      <a href="/prediosCSV" class="btn btn-success">CSV</a>
    </div>
</div>
<br>

@forelse($predios as $predio)

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://media-cdn.tripadvisor.com/media/photo-s/11/69/2b/c0/ia-darle-que-es-cafe.jpg" width="336" height="286">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $predio->nombre }}</b></h5>
        <p class="card-text"><b>Ubicación:</b> {{ $predio->ubicacion }} <b>Tamaño:</b> {{ $predio->tamaño }}</p>
        <p class="card-text"><b>Fruto Sembrado:</b> {{ $predio->planta }}</p>
            <p class="card-text"><b>Cantidad Sembrada:</b> {{ $predio->cantidad }}</p>
             <p class="card-text"><b>Nomina Quincenal:</b> {{ $predio->nomina }}</p>
        <form action="{{ route('predios.destroy', $predio->id) }}" method="post">
      <a type="submit" class="btn btn-success" href="{{ route('predios.show', $predio->id) }}">Ver</a>
      <a type="submit" class="btn btn-primary" href="{{ route('predios.edit', $predio->id) }}">Editar</a>
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form> 
      </div>
    </div>
  </div>
</div>
</center>
<br>

@empty
<div><h3>No hay predios registrados en la base de datos</h3></div>
@endforelse

<center>
{{$predios->links() }}
</center>

@endsection