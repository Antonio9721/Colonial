@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Registrar Insumo')

@section('content')

<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Registrar Insumo</h4></div>
  </center>

<div class="row">
  <div class="col-sn-2">
      <a href="{{ route('insumos.index') }}">
        <button class="btn btn-danger">Cancelar Registro</button>
    </a></div>
  
</div>
<br>
<div class="jumbotron">
<form method="post" action="{{ route('insumos.store') }}">
  @csrf
  
  <div>
    <label for="">Nombre del Producto:</label>
    <input class="form-control" type="text" name="nombre" id="" required maxlength="20">
  </div>
  <br>


  <div>
    <label for="">Cantidad Adquirida:</label>
    <input class="form-control"  type="text" name="cantidad" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Costo de la Compra:</label>
    <input class="form-control"  type="text" name="precio" id="" required maxlength="25">
  </div>
  <br>

  <div>
    <label for="">Tipo de Cultivo:</label>
    <input class="form-control"  type="text" name="tcultivo" id="" required maxlength="25">
  </div>
  <br>

  <div>
    <label for="">Descripción del Producto:</label>
    <input class="form-control"  type="text" name="descripcion" id="" required maxlength="45">
  </div>
  <br>

  <div>
    <label for="">Fecha de la Compra:</label>
    <input class="form-control"  type="date" name="fecha" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Días de Aplicación:</label>
    <input class="form-control"  type="text" name="temporada" id="" required maxlength="">
  </div>
  <br>

  

  <input class="btn btn-primary" type="submit" value="Guardar Registro">
  
</form>
</div>

@endsection