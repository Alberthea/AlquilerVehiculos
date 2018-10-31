
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
<center>
<h2>Agregar nuevo Cliente</h2>
</center>
<form action="?c=infocliente&m=agregar" method="post">
  <div class="form-group">
    <label for="DNI">Cédula:</label>
    <input type="text" class="form-control" id="DNI" name="DNI">
  </div>
  <div class="form-group">
    <label for="NombreConductor">Nombre:</label>
    <input type="text" class="form-control" id="NombreConductor" name="NombreConductor">
  </div>
  <div class="form-group">
    <label for="Apellido1">Apellido paterno:</label>
    <input type="text" class="form-control" id="Apellido1" name="Apellido1">
  </div>
  <div class="form-group">
    <label for="Apellido2">Apellido materno:</label>
    <input type="text" class="form-control" id="Apellido2" name="Apellido2">
  </div>
  <div class="form-group">
    <label for="Edad">Edad:</label>
    <input type="text" class="form-control" id="Edad" name="Edad">
  </div>
  <div class="form-group">
    <label for="Direccion">Dirección:</label>
    <input type="text" class="form-control" id="Direccion" name="Direccion">
  </div>
  <div class="form-group">
    <label for="Telefono">Teléfono:</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono">
  </div>
  <div class="form-group">
    <label for="NumTarjeta">Número de tarjeta:</label>
    <input type="text" class="form-control" id="NumTarjeta" name="NumTarjeta">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
  <a id="regresar" class="btn btn-danger" role="button" href="?c=infocliente&m=index">Regresar</a>
</form>
<br><br>
 </div>
</div>