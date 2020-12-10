@extends('layout.layout')

@section('content')

<div>
<h1>Listado de Cosechas</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Predio</th>
			<th>Cultivo</th>
			<th>Cantidad</th>
			<th>Empleados</th>
			<th>Pago</th>
			<th>Fecha</th>
			<th>Tiempo</th>
		</tr>
	</thead>
	
	@foreach ($cosechas as $cosecha)
	<tbody>
		<tr>
		<td>{{$cosecha->id}}</td>
		<td>{{$cosecha->predio}}</td>
		<td>{{$cosecha->cultivo}}</td>
		<td>{{$cosecha->cantidad}}</td>
		<td>{{$cosecha->nempleados}}</td>
		<td>{{$cosecha->pago}}</td>
		<td>{{$cosecha->fcosecha}}</td>
		<td>{{$cosecha->tiempo}}</td>
	</tr>
	</tbody>
	@endforeach
</table>


@endsection