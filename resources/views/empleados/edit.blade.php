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
	    <a href="{{ route('empleados.index') }}">
	      <button class="btn btn-danger">Cancelar Edición</button>
	  </a></div>
</div>
<br>


<div class="jumbotron">
<form method="put" action="{{ route('empleados.update', $empleado->id) }}">
	@csrf
	@method('PUT')

	<div>
		<label for="">Nombre:</label>
		<input class="form-control" type="text" value="{{$empleado->nombre }}" name="nombre" id="" required maxlength="30">
	</div>
	<br>

	<div>
		<label for="">Apellido Paterno:</label>
		<input class="form-control" type="text" value="{{$empleado->apellidop }}" name="apellidop" id="" required maxlength="25">
	</div>
	<br>

	<div>
		<label for="">Apellido Materno:</label>
		<input class="form-control"  type="text" value="{{$empleado->apellidom }}" name="apellidom" id="" required maxlength="25">
	</div>
	<br>

	<div>
		<label for="">CURP:</label>
		<input class="form-control"  type="text" value="{{$empleado->curp }}" name="curp" id="" required maxlength="18">
	</div>
	<br>

	<div>
		<label for="">Correo Electrónico:</label>
		<input class="form-control"  type="mail" value="{{$empleado->correo }}" name="correo" id="" required maxlength="30">
	</div>
	<br>

	<div>
		<label for="">Número Teléfonico:</label>
		<input class="form-control"  type="text" value="{{$empleado->telefono }}" name="telefono" id="" required maxlength="10">
	</div>
	<br>

	<div>
		<label for="">Cargo Asignado:</label>
		<select class="form-control" name="cargo" id="" required>
		  <option value="{{$empleado->cargo }}">Seleccione un cargo</option>
		  <option value="Cortador">1. Cortador</option>
		  <option value="Obrero">2. Obrero</option>
		  <option value="Chofer">3. Chofer</option>
		  <option value="Capataz">4. Capataz</option>
		  <option value="Veterinario">5. Veterinario</option>
		  <option value="Agronomo">6. Agronomo</option>
		<option value="Contador">7. Contador</option>
		<option value="Administrador">8. Administrador</option>
		</select>
	</div>
	<br>

	<div>
		<label for="">Fecha de Ingreso:</label>
		<input class="form-control" type="date" value="{{$empleado->registro }}" name="registro" id="" required maxlength="">
	</div>
	<br>

	<div>
		<label for="">Hora de Entrada:</label>
		<input class="form-control" type="time" value="{{$empleado->ingreso }}" name="ingreso" id="" required maxlength="">
	</div>
	<br>

	<div>
		<label for="">Sueldo Otorgado:</label>
		<input class="form-control"  type="int" value="{{$empleado->sueldo }}" name="sueldo" id="" required maxlength="">
	</div>
<br>
	<input class="btn btn-primary" type="submit" value="Guardar Cambios">
	
</form>
</div>

@endsection