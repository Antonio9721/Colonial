<!DOCTYPE html>
<html>
<head>
  <title>Principal</title>
</head>
<body>
	<center>
<h3><b>Hacienda Café Colonial</b></h3>
</center>

<div class="card-group">
  <div class="card">
    <img src="https://sites.google.com/site/tlatlauquitepeccerroquecolorea/_/rsrc/1423701712256/home/cerro%20cabezon.jpg" width="448" height="335">
    <div class="card-body">
      <h5 class="card-title">Predios de la Hacienda</h5>
      <p class="card-text">En este módulo encontraras cada uno de ranchos pertenecientes a la hacienda café colonial del municipio de Tlatlauquitepec.</p>
    </div>
    <center>
    <a href="{{ route('predios.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 05 de octubre de 2020.</small>
    </div>
  </div>

  <div class="card">
    <img src="https://media-cdn.tripadvisor.com/media/photo-s/06/db/93/6d/coelho-cafe-colonial.jpg" width="448" height="335">
    <div class="card-body">
      <h5 class="card-title">Empleados Registrados</h5>
      <p class="card-text">En este módulo podrás encontrar todos los trabajadores registrados o que laboran en la hacienda.</p>
    </div>
    <center>
    <a href="{{ route('empleados.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 05 de octubre de 2020.</small>
    </div>
  </div>

  <div class="card">
    <img src="https://thepanamagoodtimes.com/wp-content/uploads/2019/10/PGT-Panama-Coffee.jpg" width="448" height="335">
    <div class="card-body">
      <h5 class="card-title">Cosechas de la Temporada</h5>
      <p class="card-text">En el presente módulo, encontrarás todos los registros de las cosechas de café realizadas en cada temporada.</p>
    </div>
    <center>
    <a href="{{ route('cosechas.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 05 de octubre de 2020.</small>
    </div>
  </div>
</div>

<br> 
<div class="card-group">
  <div class="card">
    <img src="https://www.cafecolonial.mx/wp-content/uploads/2019/05/DSC_0241.jpg" width="448" height="335">
    <div class="card-body">
      <h5 class="card-title">Productos en Venta</h5>
      <p class="card-text">En el presente módulo podrás consultar todos los productos agricolas que la hacienda pone en venta, dichos productos son procesados en cada predio.</p>
    </div>
    <center>
    <a href="{{ route('productos.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 05 de octubre de 2020.</small>
    </div>
  </div>

  <div class="card">
    <img src="https://media-cdn.tripadvisor.com/media/photo-s/11/69/2c/f6/ientrale-matias-que-de.jpg" width="448" height="335">
    <div class="card-body">
      <h5 class="card-title">Almacenes de la Hacienda</h5>
      <p class="card-text">En este módulo podrás consultar todos los almacenes con los que cuenta la hacienda en cada uno de sus predios. </p>
    </div>
    <center>
    <a href="{{ route('almacens.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 05 de octubre de 2020.</small>
    </div>
  </div>


  <div class="card">
    <img src="https://www.vivetlatlauqui.mx/wp-content/uploads/2014/04/18403039_1131844956922289_5644479971459705428_n.jpg" width="448" height="335">
    <div class="card-body">
      <h5 class="card-title">Inversión de Insumos</h5>
      <p class="card-text">En este módulo podrás administrar los insumos que son invertidos cada temporada para poder obtener una cosecha lo bastante satisfactoria.</p>
    </div>
    <center>
    <a href="{{ route('insumos.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 05 de octubre de 2020.</small>
    </div>
  </div>
</div>
</body>
</html>