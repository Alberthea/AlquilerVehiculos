<br><br>
<center>
<h2>Agregar nuevo Cliente</h2>
</center>
<form action="?c=infocliente&m=agregar" method="post">
  <div class="form-group">
    <label for="DNI">Código Cliente:</label>
    <input type="text" class="form-control" id="DNI" name="DNI">
  </div>
  <div class="form-group">
    <label for="NombreConductor">Nombre de Conductor:</label>
    <input type="text" class="form-control" id="NombreConductor" name="NombreConductor">
  </div>
  <div class="form-group">
    <label for="Apellido1">Apellido Paterno:</label>
    <input type="text" class="form-control" id="Apellido1" name="Apellido1">
  </div>
  <div class="form-group">
    <label for="Apellido2">Apellido Materno:</label>
    <input type="text" class="form-control" id="Apellido2" name="Apellido2">
  </div>
  <div class="form-group">
    <label for="Edad">Edad:</label>
    <input type="text" class="form-control" id="Edad" name="Edad">
  </div>
  <div class="form-group">
    <label for="Direccion">Direccion:</label>
    <input type="text" class="form-control" id="Direccion" name="Direccion">
  </div>
  <div class="form-group">
    <label for="Telefono">Telefono:</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono">
  </div>
  <div class="form-group">
    <label for="NumTarjeta">Numero de Tarjeta:</label>
    <input type="text" class="form-control" id="NumTarjeta" name="NumTarjeta">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
  <a id="regresar" class="btn btn-danger" role="button" href="?c=infocliente&m=index">Regresar</a>
</form>
<br><br>