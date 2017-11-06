
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
<center>
<h2>Agregar nuevo Vehiculo</h2>
</center>
<form action="?c=infovehiculo&m=agregar" method="post">
  <div class="form-group">
    <label for="Matricula">Matricula:</label>
    <input type="text" class="form-control" id="Matricula" name="Matricula">
  </div>
  <div class="form-group">
    <label for="CodGrupo">Grupo:</label>
    <input type="text" class="form-control" id="CodGrupo" name="CodGrupo">
  </div>
  <div class="form-group">
    <label for="Marca">Marca:</label>
    <input type="text" class="form-control" id="Marca" name="Marca">
  </div>
  <div class="form-group">
    <label for="Modelo">Modelo:</label>
    <input type="text" class="form-control" id="Modelo" name="Modelo">
  </div>
  <div class="form-group">
    <label for="NPuertas">NPuertas:</label>
    <input type="text" class="form-control" id="NPuertas" name="NPuertas">
  </div>
  <div class="form-group">
    <label for="NAsientos">NAsientos:</label>
    <input type="text" class="form-control" id="NAsientos" name="NAsientos">
  </div>
  <div class="form-group">
    <label for="CapMaletero">CapMaletero:</label>
    <input type="text" class="form-control" id="CapMaletero" name="CapMaletero">
  </div>
  <div class="form-group">
    <label for="EstadoVehiculo">EstadoVehiculo:</label>
    <input type="text" class="form-control" id="EstadoVehiculo" name="EstadoVehiculo">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
  <a class="btn btn-danger" role="button" href="?c=infovehiculo&m=index">Regresar</a>
</form>
<br><br>
 </div>
</div>