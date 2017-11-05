<br><br>
  <center>
    <h2>Editar Grupo Vehiculo: <?php echo $this->infogrupovehiculo->getAtributo('NombreGrupo');?> </h2>
  </center>
    <form action="?c=infogrupovehiculo&m=editar" method="post">
      <div class="form-group">
        <label for="CodGrupo">Código del Grupo:</label>
        <input type="text" class="form-control" id="CodGrupo" name="CodGrupo" value="<?php echo $this->infogrupovehiculo->getAtributo('CodGrupo');?>" readonly>
      </div>
      <div class="form-group">
        <label for="NombreGrupo">Nombre del Grupo:</label>
        <input type="text" class="form-control" id="NombreGrupo" name="NombreGrupo" value="<?php echo $this->infogrupovehiculo->getAtributo('NombreGrupo');?> " >
      </div>
      <div class="form-group">
        <label for="Tipo">Tipo:</label>
        <input type="text" class="form-control" id="Tipo" name="Tipo" value="<?php echo $this->infogrupovehiculo->getAtributo('Tipo');?> " >
      </div>
      <div class="form-group">
        <label for="TamanoVehiculo">Tamaño del Vehiculo:</label>
        <input type="text" class="form-control" id="TamanoVehiculo" name="TamanoVehiculo" value="<?php echo $this->infogrupovehiculo->getAtributo('TamanoVehiculo');?> " >
      </div>
      <div class="form-group">
        <label for="EdadMinima">Edad Minima:</label>
        <input type="text" class="form-control" id="EdadMinima" name="EdadMinima" value="<?php echo $this->infogrupovehiculo->getAtributo('EdadMinima');?> " >
      </div>

      <button type="submit" class="btn btn-success">Editar</button> 
      <a href="?c=infogrupovehiculo&m=index" class="btn btn-danger" role="button">Regresar</a>    
    </form>
    <br><br>