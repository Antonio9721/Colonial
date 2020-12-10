@extends('layout.layout')

@section('content')

<div>
<h1>Listado de Productos</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Inversión</th>
			<th>Ganancia</th>
			<th>Descripción</th>
		</tr>
	</thead>
	
	@foreach ($productos as $producto)
	<tbody>
		<tr>
		<td>{{$producto->id}}</td>
		<td>{{$producto->nombre}}</td>
		<td>{{$producto->tipo}}</td>
		<td>{{$producto->cantidad}}</td>
		<td>{{$producto->precio}}</td>
		<td>{{$producto->inversion}}</td>
		<td>{{$producto->ganancia}}</td>
		<td>{{$producto->descripcion}}</td>
	</tr>
	</tbody>
	@endforeach
</table>


@endsection