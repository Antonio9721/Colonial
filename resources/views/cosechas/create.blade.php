@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Registrar Cosecha')

@section('content')

<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Registrar Cosecha</h4></div>
  </center>

<div class="row">
  <div class="col-sn-2">
      <a href="{{ route('cosechas.index') }}">
        <button class="btn btn-danger">Cancelar Registro</button>
    </a></div>
  
</div>
<br>
<div class="jumbotron">
<form method="post" action="{{ route('cosechas.store') }}">
  @csrf
  
  <div>
    <label for="">Predio Cosechado:</label>
    <input class="form-control" type="text" name="predio" id="" required maxlength="20">
  </div>
  <br>

<div>
    <label for="">Fruto Cosechado:</label>
    <select class="form-control" name="cultivo" id="" required>
      <option value="">Seleccione un fruto</option>
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
    <label for="">Cantidad Cosechada:</label>
    <input class="form-control"  type="text" name="cantidad" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Número de Cortadores:</label>
    <input class="form-control"  type="int" name="nempleados" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Pago por Cortador:</label>
    <input class="form-control"  type="int" name="pago" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Fecha de la Cosecha:</label>
    <input class="form-control"  type="date" name="fcosecha" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Duración de la Cosecha:</label>
    <input class="form-control"  type="int" name="tiempo" id="" required maxlength="">
  </div>
  <br>

  <input class="btn btn-primary" type="submit" value="Guardar Registro">
  
</form>
</div>

@endsection