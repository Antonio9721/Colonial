@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Registrar Producto')

@section('content')

<center>
   <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Registrar Producto</h4></div>
  </center>

<div class="row">
  <div class="col-sn-2">
      <a href="{{ route('productos.index') }}">
        <button class="btn btn-danger">Cancelar Registro</button>
    </a></div>
  
</div>
<br>
<div class="jumbotron">
<form method="post" action="{{ route('productos.store') }}">
  @csrf
  
  <div>
    <label for="">Nombre del Producto:</label>
    <input class="form-control" type="text" name="nombre" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Tipo de Producto:</label>
    <input class="form-control" type="text" name="tipo" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Cantidad Producida:</label>
    <input class="form-control"  type="text" name="cantidad" id="" required maxlength="15">
  </div>
  <br>

  
  <div>
    <label for="">Precio de Venta:</label>
    <input class="form-control"  type="text" name="precio" id="" required maxlength="15">
  </div>
  <br>

  <div>
    <label for="">Descripción del Producto:</label>
    <input class="form-control"  type="text" name="descripcion" id="" required maxlength="50">
  </div>
  <br>

  <div>
    <label for="">Dinero Invertido:</label>
    <input class="form-control"  type="text" name="inversion" id="" required maxlength="10">
  </div>
  <br>

   <div>
    <label for="">Ganancia Obtenida:</label>
    <input class="form-control"  type="text" name="ganancia" id="" required maxlength="10">
  </div>
  <br>

  

  <input class="btn btn-primary" type="submit" value="Guardar Registro">
  
</form>
</div>

@endsection