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
	    <a href="{{ route('cosechas.index') }}">
	      <button class="btn btn-danger">Cancelar Edición</button>
	  </a></div>
</div>
<br>


<div class="jumbotron">
<form method="post" action="{{ route('cosechas.update', $cosecha->id) }}">
	@csrf
	@method('PUT')

	<div>
		<label for="">Predio Cosechado:</label>
		<input class="form-control" type="text" value="{{$cosecha->predio }}" name="predio" id="" required maxlength="12">
	</div>
	<br>

	<div>
		<label for="">Cultivo Cosechado:</label>
		<select class="form-control" name="cultivo" id="" required>
		  <option value="{{$cosecha->cultivo }}">Seleccione un cultivo</option>
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
		<label for="">Cantidad Cosechada:</label>
		<input class="form-control"  type="text" value="{{$cosecha->cantidad }}" name="cantidad" id="" required maxlength="12">
	</div>
	<br>

	<div>
		<label for="">Número de Cortadores:</label>
		<input class="form-control"  type="int" value="{{$cosecha->nempleados }}" name="nempleados" id="" required maxlength="3">
	</div>
	<br>


	<div>
		<label for="">Pago por Empleado:</label>
		<input class="form-control" type="int" value="{{$cosecha->pago }}" name="pago" id="" required maxlength="">
	</div>

<br>

    <div>
		<label for="">Fecha de la Cosecha:</label>
		<input class="form-control" type="date" value="{{$cosecha->fcosecha }}" name="fcosecha" id="" required maxlength="">
	</div>

<br>

    <div>
		<label for="">Duración de la Cosecha:</label>
		<input class="form-control" type="int" value="{{$cosecha->tiempo }}" name="tiempo" id="" required maxlength="">
	</div>

<br>
	<input class="btn btn-primary" type="submit" value="Guardar Cambios">
	
</form>
</div>

@endsection