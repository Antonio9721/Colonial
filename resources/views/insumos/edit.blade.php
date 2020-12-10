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
	    <a href="{{ route('insumos.index') }}">
	      <button class="btn btn-danger">Cancelar Edición</button>
	  </a></div>
</div>
<br>


<div class="jumbotron">
<form method="post" action="{{ route('insumos.update', $insumo->id) }}">
	@csrf
	@method('PUT')

	<div>
		<label for="">Nombre Insumo:</label>
		<input class="form-control" type="text" value="{{$insumo->nombre }}" name="nombre" id="" required maxlength="20">
	</div>
	<br>

	<div>
		<label for="">Cantidad Adquirida:</label>
		<input class="form-control" type="text" value="{{$insumo->cantidad }}" name="cantidad" id="" required maxlength="20">
	</div>
	<br>


	<div>
		<label for="">Costo de la Compra:</label>
		<input class="form-control"  type="text" value="{{$insumo->precio }}" name="precio" id="" required maxlength="20">
	</div>
	<br>

	<div>
		<label for="">Tipo de Cultivo:</label>
		<input class="form-control"  type="text" value="{{$insumo->tcultivo }}" name="tcultivo" id="" required maxlength="25">
	</div>
	<br>


	<div>
		<label for="">Descripción del Producto:</label>
		<input class="form-control" type="text" value="{{$insumo->descripcion }}" name="descripcion" id="" required maxlength="">
	</div>

<br>

    <div>
		<label for="">Fecha de la Compra:</label>
		<input class="form-control" type="date" value="{{$insumo->fecha }}" name="fecha" id="" required maxlength="">
	</div>

<br>

    <div>
		<label for="">Días de Aplicación :</label>
		<input class="form-control" type="text" value="{{$insumo->temporada }}" name="temporada" id="" required maxlength="">
	</div>

<br>

	<input class="btn btn-primary" type="submit" value="Guardar Cambios">
	
</form>
</div>

@endsection