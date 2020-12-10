@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Cosechas')
@section('content')

<center>
   <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Detalles de la Cosecha</h4></div>
  </center>

  
<div class="row">
  <div class="col-sn-2"><a class="btn btn-primary" href="{{ route('cosechas.index') }}">Volver al Registro</a></div>
</div>
<br>

<div class="card text-center">
  <div class="card bg-dark text-white text-center">
    <h4><b>Predio Cosechado: </b>{{ $cosecha->predio }}</h4>
  </div>
  <div class="card bg-secondary text-white text-center"  class="card-body">
    <center>
        <img src="https://www.oscarchamps.com/wp-content/uploads/2020/01/1998-Armageddon-02.jpg" width="500" height="230">
        </center>
    <h5 class="card-title"><b>Fruto Cosechado: </b>  {{ $cosecha->cultivo }} <b>Cantidad Cosechada: </b> {{ $cosecha->cantidad }} </h5>
    <p class="card-text"><b>Número de Cortadores: </b> {{ $cosecha->nempleados }} <b>Pago por Cortador: </b> {{ $cosecha->pago }}</p>
    <p class="card-text"><b>Fecha de la Cosecha:</b> {{ $cosecha->fcosecha }}</p>
    <p class="card-text"><b>Duración de la Cosecha:</b> {{ $cosecha->tiempo }} </p>

    <form action="{{ route('cosechas.destroy', $cosecha->id) }}" method="post">
      <a type="submit" class="btn btn-primary" href="{{ route('cosechas.edit', $cosecha->id) }}">Editar</a>
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form> 
    
  </div>
  <div class="card bg-dark text-white text-center" class="card-footer text-muted">
    Cosecha llevada a cabo
  </div>
</div>
<br><br>


@endsection