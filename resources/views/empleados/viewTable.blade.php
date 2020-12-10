@extends('layouts.app')
@section('title', 'Empleados')
@section('content')

@forelse($emleados as @$empleado)
  <table class="table">
  	<thead>
  		<tr>
  			<th scope="col">Nombre</th>
  			<th scope="col">Cargo</th>
  			<th scope="col">Sueldo</th>
  			<th scope="col">Acciones</th>
  		</tr>
  	</thead>
  	<tbody>
  		@forelse($empleados as @empleado)
  		<tr>
  		   <th scope="row">{{ $empleado->nombre }}</th>
  		   <td>{{ $empleado->cargo }}</td>
  		   <td>{{ $empleado->sueldo }}</td>
  		   <td> ver - editar -eliminar </td>
  		</tr>
  		@empty
  		<h3>No hay datos</h3>
  		@endforelse
  	</tbody>
  </table>

@empty 

@endforelse

@end section