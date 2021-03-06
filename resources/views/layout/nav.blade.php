<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="welcome">Café Colonial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div style="width: 180px;">
          <img src="https://ayuntamientotlatlauquitepec.gob.mx/images/logo.png" width="135" height="40" alt="Logo Cobaep">
        </div>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Página Principal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('predios.index') }}">Predios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('cosechas.index') }}">Cosechas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('almacens.index') }}">Almacenes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('insumos.index') }}">Insumos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Registros</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('productos.index') }}">Productos</a>
          <a class="dropdown-item" href="#">Ventas</a>
          <a class="dropdown-item" href="#">Importaciones</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Exportaciones</a>
        </div>
      </li>
    </ul>
    
  </div>
</nav>

</body>
</html>