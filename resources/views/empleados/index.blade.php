@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Empleados')
@section('content')

<center>
  <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Listado de Empleados</h4></div>
  </center>

<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('empleados.create') }}">Agregar Empleado</a></div>

<div class="col-6">
</div>
  <div class="btn-group col-4" role="group" aria-label="Basic example">
      <a href="{{ route('empleados.pdf') }}" class="btn btn-danger">PDF</a>
      <a href="/empleadosXLS" class="btn btn-dark">XLS</a>
      <a href="/empleadosCSV" class="btn btn-success">CSV</a>
    </div>
</div>
<br>

@forelse($empleados as $empleado)

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://www.vivetlatlauqui.mx/wp-content/uploads/2014/04/18403039_1131844956922289_5644479971459705428_n.jpg" width="336" height="286">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $empleado->nombre }} {{ $empleado->apellidop }}  {{$empleado->apellidom}}</b></h5>
        <p class="card-text"><b>Puesto Asignado: </b>  {{ $empleado->cargo }} <b>Sueldo:</b> {{ $empleado->sueldo }}</p>
        <p class="card-text"><b>Hora de Entrada:</b> {{ $empleado->ingreso }}</p>
            <p class="card-text"><b>CURP:</b> {{ $empleado->curp }}</p>
             <p class="card-text"><b>Correo Electrónico:</b> {{ $empleado->correo }}  <b>Número Teléfonico:</b> {{ $empleado->telefono }}</p>
        <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post">
      <a type="submit" class="btn btn-success" href="{{ route('empleados.show', $empleado->id) }}">Ver</a>
      <a type="submit" class="btn btn-primary" href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form> 
      </div>
    </div>
  </div>
</div>
</center>


@empty
<div><h3>No hay empleados registrados en la base de datos</h3></div>
@endforelse

<center>
{{$empleados->links() }}
</center>


@endsection