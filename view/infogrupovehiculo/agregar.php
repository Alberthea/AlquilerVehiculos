
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
<center>
<h2>Agregar Nuevo Grupo de Vehiculos</h2>
</center>
<form action="?c=infogrupovehiculo&m=agregar" method="post">
  <div class="form-group">
    <label for="CodGrupo">Código:</label>
    <input type="text" class="form-control" id="CodGrupo" name="CodGrupo">
  </div>
  <div class="form-group">
    <label for="NombreGrupo">Nombre:</label>
    <input type="text" class="form-control" id="NombreGrupo" name="NombreGrupo">
  </div>
  <div class="form-group">
    <label for="Tipo">Tipo del vehículo:</label>
    <input type="text" class="form-control" id="Tipo" name="Tipo">
  </div>
  <div class="form-group">
    <label for="TamanoVehiculo">Tamaño del vehículo:</label>
    <input type="text" class="form-control" id="TamanoVehiculo" name="TamanoVehiculo">
  </div>
  <div class="form-group">
    <label for="EdadMinima">Edad mínima:</label>
    <input type="text" class="form-control" id="EdadMinima" name="EdadMinima">
  </div>
  <div class="form-group">
    <label for="PrecioDia">Precio por día:</label>
    <input type="text" class="form-control" id="PrecioDia" name="PrecioDia">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
  <a href="?c=infogrupovehiculo&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
<br><br>
 </div>
</div>