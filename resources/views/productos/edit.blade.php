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
	    <a href="{{ route('productos.index') }}">
	      <button class="btn btn-danger">Cancelar Edición</button>
	  </a></div>
</div>
<br>


<div class="jumbotron">
<form method="post" action="{{ route('productos.update', $producto->id) }}">
	@csrf
	@method('PUT')

	<div>
		<label for="">Nombre del Predio:</label>
		<input class="form-control" type="text" value="{{$producto->nombre }}" name="nombre" id="" required maxlength="25">
	</div>
	<br>

	<div>
		<label for="">Tipo de Producto</label>
		<input class="form-control" type="text" value="{{$producto->tipo }}" name="tipo" id="" required maxlength="25">
	</div>
	<br>

	<div>
		<label for="">Cantidad Producida:</label>
		<input class="form-control"  type="text" value="{{$producto->cantidad }}" name="cantidad" id="" required maxlength="20">
	</div>
	<br>

	

	<div>
		<label for="">Precio de Venta:</label>
		<input class="form-control"  type="text" value="{{$producto->precio }}" name="precio" id="" required maxlength="15">
	</div>
	<br>


	<div>
		<label for="">Descripción del Producto:</label>
		<input class="form-control" type="text" value="{{$producto->descripcion }}" name="descripcion" id="" required maxlength="">
	</div>

<br>

<div>
		<label for="">Dinero Invertido:</label>
		<input class="form-control" type="text" value="{{$producto->inversion }}" name="inversion" id="" required maxlength="">
	</div>

<br>

<div>
		<label for="">Ganancia Obtenida:</label>
		<input class="form-control" type="text" value="{{$producto->ganancia }}" name="ganancia" id="" required maxlength="">
	</div>

<br>
	<input class="btn btn-primary" type="submit" value="Guardar Cambios">
	
</form>
</div>

@endsection