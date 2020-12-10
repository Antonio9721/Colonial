@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Editar Registro')
@section('content')

<center>
   <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Editar Registro</h4></div>
  </center>


<div class="row">
	<div class="col-sn-2">
	    <a href="{{ route('predios.index') }}">
	      <button class="btn btn-danger">Cancelar Edición</button>
	  </a></div>
</div>
<br>


<div class="jumbotron">
<form method="post" action="{{ route('predios.update', $predio->id) }}">
	@csrf
	@method('PUT')

	<div>
		<label for="">Nombre del Predio:</label>
		<input class="form-control" type="text" value="{{$predio->nombre }}" name="nombre" id="" required maxlength="25">
	</div>
	<br>

	<div>
		<label for="">Ubicación del Predio:</label>
		<input class="form-control" type="text" value="{{$predio->ubicacion }}" name="ubicacion" id="" required maxlength="25">
	</div>
	<br>

	<div>
		<label for="">Tamaño del Predio:</label>
		<input class="form-control"  type="text" value="{{$predio->tamaño }}" name="tamaño" id="" required maxlength="20">
	</div>
	<br>

	<div>
		<label for="">Fruto Plantado:</label>
		<select class="form-control" name="planta" id="" required>
		  <option value="{{$predio->planta }}">Seleccione un tipo de planta</option>
		  <option value="Café Arábigo">1. Café Arábigor</option>
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
		<label for="">Cantidad Plantada:</label>
		<input class="form-control"  type="text" value="{{$predio->cantidad }}" name="cantidad" id="" required maxlength="15">
	</div>
	<br>


	<div>
		<label for="">Nomina Quincenal:</label>
		<input class="form-control" type="text" value="{{$predio->nomina }}" name="nomina" id="" required maxlength="">
	</div>

<br>
	<input class="btn btn-primary" type="submit" value="Guardar Cambios">
	
</form>
</div>

@endsection