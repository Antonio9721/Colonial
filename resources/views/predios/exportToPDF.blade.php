@extends('layout.layout')

@section('content')

<div>
<h1>Listado de Predios</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Ubicación</th>
			<th>Tamaño</th>
			<th>Planta</th>
			<th>Cantidad</th>
			<th>Nomina</th>
		</tr>
	</thead>
	
	@foreach ($predios as $predio)
	<tbody>
		<tr>
		<td>{{$predio->id}}</td>
		<td>{{$predio->nombre}}</td>
		<td>{{$predio->ubicacion}}</td>
		<td>{{$predio->tamaño}}</td>
		<td>{{$predio->planta}}</td>
		<td>{{$predio->cantidad}}</td>
		<td>{{$predio->nomina}}</td>
	</tr>
	</tbody>
	@endforeach
</table>


@endsection