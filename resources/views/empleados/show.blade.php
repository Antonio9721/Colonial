@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Empleados')
@section('content')

<center>
   <div class="col-sn-10"><h3>Hacienda Cáfe Colonial</h3></div>
  <div class="col-sn-10"><h4>Detalles del Empleado</h4></div>
  </center>

  
<div class="row">
  <div class="col-sn-2"><a class="btn btn-primary" href="{{ route('empleados.index') }}">Volver al Registro</a></div>
</div>
<br>

<div class="card text-center">
  <div class="card bg-dark text-white text-center">
    <h4><b>{{ $empleado->nombre }} {{ $empleado->apellidop }}  {{$empleado->apellidom}}</b></h4>
  </div>
  <div class="card bg-secondary text-white text-center"  class="card-body">
    <center>
        <img src="https://www.oscarchamps.com/wp-content/uploads/2020/01/1998-Armageddon-02.jpg" width="500" height="230">
        </center>
    <h5 class="card-title"><b>Puesto Asignado: </b>  {{ $empleado->cargo }} <b>Sueldo:</b> {{ $empleado->sueldo }} </h5>
    <p class="card-text"><b>Hora de Entrada:</b> {{ $empleado->ingreso }}</p>
    <p class="card-text"><b>Fecha de Ingreso:</b> {{ $empleado->registro }}</p>
    <p class="card-text"><b>CURP:</b> {{ $empleado->curp }}</p>
    <p class="card-text"><b>Correo Electrónico:</b> {{ $empleado->correo }}     <b>Número Teléfonico:</b> {{ $empleado->telefono }}</p>

    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post">
      <a type="submit" class="btn btn-primary" href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    
    
  </div>
  <div class="card bg-dark text-white text-center" class="card-footer text-muted">
    Empleado Registrado en la empresa
  </div>
</div>
<br><br>


@endsection