@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Insumos')
@section('content')

<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Detalles del Insumo</h4></div>
  </center>

  
<div class="row">
  <div class="col-sn-2"><a class="btn btn-primary" href="{{ route('insumos.index') }}">Volver al Registro</a></div>
</div>
<br>

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://tlatlauquitepecpueblomagico.gob.mx/wp-content/uploads/2020/09/cropped-plaza02-300x300-1.jpg" width="336" height="286">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $insumo->nombre }}</b></h5>
        <p class="card-text"><b>Cantidad Adquirida: </b>  {{ $insumo->cantidad }} <b>Precio: </b> {{ $insumo->precio }}</p>
        <p class="card-text"><b>Cultivo: </b> {{ $insumo->tcultivo}} 
            <p class="card-text"><b>Descripción: </b>{{ $insumo->descripcion }}</p>
            <p class="card-text"><b>Fecha de Compra:</b> {{ $insumo->fecha }} <b>Días de Aplicación: </b> {{ $insumo->temporada }} </p>
        <form action="{{ route('insumos.destroy', $insumo->id) }}" method="post">
      <a type="submit" class="btn btn-primary" href="{{ route('insumos.edit', $insumo->id) }}">Editar</a>
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form> 
      </div>
    </div>
  </div>
</div>
</center>



@endsection