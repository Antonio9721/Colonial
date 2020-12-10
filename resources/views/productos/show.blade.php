@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Productos')
@section('content')

<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Detalles del Producto</h4></div>
  </center>

  
<div class="row">
  <div class="col-sn-2"><a class="btn btn-primary" href="{{ route('productos.index') }}">Volver al Registro</a></div>
</div>
<br>

<div class="card text-center">
  <div class="card bg-dark text-white text-center">
    <h4><b>Nombre: </b>{{ $producto->nombre }}</h4>
  </div>
  <div class="card bg-secondary text-white text-center"  class="card-body">
    <center>
        <img src="https://www.oscarchamps.com/wp-content/uploads/2020/01/1998-Armageddon-02.jpg" width="500" height="230">
        </center>
    <h5 class="card-title"><b>Tipo: </b>  {{ $producto->tipo }} <b>Cantidad:</b> {{ $producto->cantidad }} </h5>
    <p class="card-text"><b>Precio:</b> {{ $producto->precio }}</p>
    <p class="card-text"><b>Inversión:</b> {{ $producto->inversion }}</p>
    <p class="card-text"><b>Ganancia:</b> {{ $producto->ganancia }}</p>
    <p class="card-text"><b>Descripción:</b> {{ $producto->descripcion }}</p>
    
    
  </div>
  <div class="card bg-dark text-white text-center" class="card-footer text-muted">
    Producto registrado en la BD
  </div>
</div>
<br><br>


@endsection