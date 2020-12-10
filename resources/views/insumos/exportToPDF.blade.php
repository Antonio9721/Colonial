@extends('layout.layout')

@section('content')

<div>
<h1>Listado de Insumos</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Cultivo</th>
			<th>Descripción</th>
			<th>Fecha</th>
			<th>Temporada</th>
		</tr>
	</thead>
	
	@foreach ($insumos as $insumo)
	<tbody>
		<tr>
		<td>{{$insumo->id}}</td>
		<td>{{$insumo->nombre}}</td>
		<td>{{$insumo->cantidad}}</td>
		<td>{{$insumo->precio}}</td>
		<td>{{$insumo->tcultivo}}</td>
		<td>{{$insumo->descripcion}}</td>
		<td>{{$insumo->fecha}}</td>
		<td>{{$insumo->temporada}}</td>
	</tr>
	</tbody>
	@endforeach
</table>


@endsection