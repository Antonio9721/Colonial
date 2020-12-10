@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Registrar Predio')

@section('content')

<center>
   <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Registrar Predio</h4></div>
  </center>

<div class="row">
  <div class="col-sn-2">
      <a href="{{ route('predios.index') }}">
        <button class="btn btn-danger">Cancelar Registro</button>
    </a></div>
  
</div>
<br>
<div class="jumbotron">
<form method="post" action="{{ route('predios.store') }}">
  @csrf
  
  <div>
    <label for="">Nombre del Predio:</label>
    <input class="form-control" type="text" name="nombre" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Ubicación del Predio:</label>
    <input class="form-control" type="text" name="ubicacion" id="" required maxlength="25">
  </div>
  <br>

  <div>
    <label for="">Tamaño del Predio:</label>
    <input class="form-control"  type="text" name="tamaño" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Fruto Sembrado:</label>
    <select class="form-control" name="planta" id="" required>
      <option value="">Seleccione un fruto</option>
      <option value="Café Arábigo">1. Café Arabigo</option>
      <option value="Café Costa Rica">2. Café Costa Rica</option>
      <option value="Café Caturra">3. Café Caturra</option>
      <option value="Naranja">4. Naranja</option>
      <option value="Lima">5. Lima</option>
      <option value="Limón">6. Limón</option>
      <option value="Mandarina">7. Mandarina</option>
    </select>
  </div>
  <br>

  <div>
    <label for="">Cantidad del Fruto Sembrado:</label>
    <input class="form-control"  type="text" name="cantidad" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Nomina Quincenal:</label>
    <input class="form-control"  type="text" name="nomina" id="" required maxlength="10">
  </div>
  <br>

  

  <input class="btn btn-primary" type="submit" value="Guardar Registro">
  
</form>
</div>

@endsection