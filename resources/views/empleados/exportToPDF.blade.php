@extends('layout.layout')

@section('content')

<div>
<h1>Listado de Empleados</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>CURP</th>
			<th>Correo Electrónico</th>
			<th>Número Teléfonico</th>
			<th>Puesto de Trabajo</th>
			<th>Fecha de Registro</th>
			<th>Hora de Entrada</th>
			<th>Sueldo Quincenal</th>
		</tr>
	</thead>

	@foreach ($empleados as $empleado)
	<tbody>
		<tr>
		<td>{{$empleado->id}}</td>
		<td>{{$empleado->nombre}}</td>
		<td>{{$empleado->apellidop}}</td>
		<td>{{$empleado->apellidom}}</td>
		<td>{{$empleado->curp}}</td>
		<td>{{$empleado->correo}}</td>
		<td>{{$empleado->telefono}}</td>
		<td>{{$empleado->cargo}}</td>
		<td>{{$empleado->registro}}</td>
		<td>{{$empleado->ingreso}}</td>
		<td>{{$empleado->sueldo}}</td>
	</tr>
	</tbody>
	@endforeach
</table>


@endsection
