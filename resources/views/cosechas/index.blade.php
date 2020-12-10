@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Cosechas')
@section('content')

<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Listado de Cosechas</h4></div>
  </center>
  
<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('cosechas.create') }}">Agregar Cosecha</a></div>
  
<div class="col-6">
</div>
  <div class="btn-group col-4" role="group" aria-label="Basic example">
      <a href="{{ route('cosechas.pdf') }}" class="btn btn-danger">PDF</a>
      <a href="/cosechasXLS" class="btn btn-dark">XLS</a>
      <a href="/cosechasCSV" class="btn btn-success">CSV</a>
      <a href="{{ route('cosechas.grafica') }}" class="btn btn-warning">Graficar</a>
    </div>
</div>
<br>
    
@forelse($cosechas as $cosecha)

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://www.oronoticias.com.mx/wp-content/uploads/2020/03/cereza.jpg" width="336" height="286">
    </div>
  
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $cosecha->predio }}</b></h5>
        <p class="card-text"><b>Fruto Cosechado: </b>  {{ $cosecha->cultivo }} <b>Cantidad Cosechada:</b> {{ $cosecha->cantidad }}</p>
        <p class="card-text"><b>Número de Cortadores:</b> {{ $cosecha->nempleados }} <b>Pago por Cortador: </b> {{ $cosecha->pago }}</p>
            <p class="card-text"><b>Fecha de la Cosecha:</b> {{ $cosecha->fcosecha }}</p>
            <p class="card-text"><b>Duración de la Cosecha:</b> {{ $cosecha->tiempo }} </p>
        <form action="{{ route('cosechas.destroy', $cosecha->id) }}" method="post">
      <a type="submit" class="btn btn-success" href="{{ route('cosechas.show', $cosecha->id) }}">Ver</a>
      <a type="submit" class="btn btn-primary" href="{{ route('cosechas.edit', $cosecha->id) }}">Editar</a>
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
<div><h3>No hay cosechas registradas en la base de datos</h3></div>
@endforelse

<center>
{{$cosechas->links() }}
</center>


@endsection