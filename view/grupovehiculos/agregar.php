<center>
<h2>Agregar Nuevo Grupo de Vehiculos</h2>
</center>
<form action="?c=grupovehiculos&m=agregar" method="post">
  <div class="form-group">
    <label for="CodGrupo">Código del Grupo:</label>
    <input type="text" class="form-control" id="CodGrupo" name="CodGrupo">
  </div>
  <div class="form-group">
    <label for="NombreGrupo">Nombre del Grupo:</label>
    <input type="text" class="form-control" id="NombreGrupo" name="NombreGrupo">
  </div>
  <div class="form-group">
    <label for="Tipo">Tipo:</label>
    <input type="text" class="form-control" id="Tipo" name="Tipo">
  </div>
  <div class="form-group">
    <label for="TamanoVehiculo">Tamaño:</label>
    <input type="text" class="form-control" id="TamanoVehiculo" name="TamanoVehiculo">
  </div>
  <div class="form-group">
    <label for="CantPuertas">Cantidad de Puertas:</label>
    <input type="text" class="form-control" id="CantPuertas" name="CantPuertas">
  </div>
  <div class="form-group">
    <label for="CantAsientos">Cantidad de Asientos:</label>
    <input type="text" class="form-control" id="CantAsientos" name="CantAsientos">
  </div>
  <div class="form-group">
    <label for="CapacidadMaletero">Cantidad de Maletero:</label>
    <input type="text" class="form-control" id="CapacidadMaletero" name="CapacidadMaletero">
  </div>
  <div class="form-group">
    <label for="EdadMinima">Edad Minima:</label>
    <input type="text" class="form-control" id="EdadMinima" name="EdadMinima">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
  <a href="?c=grupovehiculos&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>