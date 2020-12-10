@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Registrar Almacen')

@section('content')

<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Registrar Almacen</h4></div>
  </center>

<div class="row">
  <div class="col-sn-2">
      <a href="{{ route('almacens.index') }}">
        <button class="btn btn-danger">Cancelar Registro</button>
    </a></div>
  
</div>
<br>
<div class="jumbotron">
<form method="post" action="{{ route('almacens.store') }}">
  @csrf
  
  <div>
    <label for="">Nombre del Almacen:</label>
    <input class="form-control" type="text" name="nombre" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Ubicación del Almacen:</label>
    <input class="form-control" type="text" name="ubicacion" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Producto Almacenado:</label>
    <select class="form-control" name="producto" id="" required>
      <option value="">Seleccione un producto</option>
      <option value="Café Arábigo">Café Arábigo</option>
      <option value="Café Costa Rica">Café Costa Rica</option>
      <option value="Café Caturra">Café Caturra</option>
      <option value="Naranja">Naranja</option>
      <option value="Lima">Lima</option>
      <option value="Limón">Limón</option>
      <option value="Mandarina">Mandarina</option>
    </select>
  </div>
  <br>

  <div>
    <label for="">Nombre del Encargado:</label>
    <input class="form-control"  type="text" name="nencargado" id="" required maxlength="15">
  </div>
  <br>

  <div>
    <label for="">Apellidos del Encargado:</label>
    <input class="form-control"  type="text" name="aencargado" id="" required maxlength="25">
  </div>
  <br>

  <div>
    <label for="">Hora de Apertura:</label>
    <input class="form-control"  type="time" name="habierto" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Hora de Cierre:</label>
    <input class="form-control"  type="time" name="hcerrado" id="" required maxlength="">
  </div>
  <br>

  

  <input class="btn btn-primary" type="submit" value="Guardar Registro">
  
</form>
</div>

@endsection