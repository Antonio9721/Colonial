@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Predios')
@section('content')

<center>
   <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Detalles del Predio</h4></div>
  </center>

  
<div class="row">
  <div class="col-sn-2"><a class="btn btn-primary" href="{{ route('predios.index') }}">Volver al Registro</a></div>
</div>
<br>

<div class="card text-center">
  <div class="card bg-dark text-white text-center">
    <h4><b>Nombre: </b>{{ $predio->nombre }}</h4>
  </div>
  <div class="card bg-secondary text-white text-center"  class="card-body">
    <center>
        <img src="https://www.oscarchamps.com/wp-content/uploads/2020/01/1998-Armageddon-02.jpg" width="500" height="230">
        </center>
    <h5 class="card-title"><b>Ubicación: </b>  {{ $predio->ubicacion }} <b>Tamaño:</b> {{ $predio->tamaño }} </h5>
    <p class="card-text"><b>Fruto Sembrado:</b> {{ $predio->planta }}</p>
    <p class="card-text"><b>Cantidad Sembrada:</b> {{ $predio->cantidad }}</p>
    <p class="card-text"><b>Nomina Quincenal:</b> {{ $predio->nomina }}</p>
    
    
  </div>
  <div class="card bg-dark text-white text-center" class="card-footer text-muted">
    Predio Registrado en la Hacienda
  </div>
</div>
<br><br>


@endsection