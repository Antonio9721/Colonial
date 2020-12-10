@extends('layout.layout')

@section('content')

<div>
<h1>Listado de Almacenes</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Ubicación</th>
			<th>Producto</th>
			<th>Encargado</th>
			<th>Apellidos</th>
			<th>H. Abierto</th>
			<th>H. Cierre</th>
		</tr>
	</thead>
	
	@foreach ($almacens as $almacen)
	<tbody>
		<tr>
		<td>{{$almacen->id}}</td>
		<td>{{$almacen->nombre}}</td>
		<td>{{$almacen->ubicacion}}</td>
		<td>{{$almacen->producto}}</td>
		<td>{{$almacen->nencargado}}</td>
		<td>{{$almacen->aencargado}}</td>
		<td>{{$almacen->habierto}}</td>
		<td>{{$almacen->hcerrado}}</td>
		
	</tr>
	</tbody>
	@endforeach
</table>


@endsection