  <center>
    <h2>Editar Grupo Vehiculo: <?php echo $this->grupovehiculos->getAtributo('NombreGrupo');?> </h2>
  </center>
    <form action="?c=grupovehiculos&m=editar" method="post">
      <div class="form-group">
        <label for="CodGrupo">Código del Grupo:</label>
        <input type="text" class="form-control" id="CodGrupo" name="CodGrupo" value="<?php echo $this->grupovehiculos->getAtributo('CodGrupo');?>" readonly>
      </div>
      <div class="form-group">
        <label for="NombreGrupo">Nombre del Grupo:</label>
        <input type="text" class="form-control" id="NombreGrupo" name="NombreGrupo" value="<?php echo $this->grupovehiculos->getAtributo('NombreGrupo');?> " >
      </div>
      <div class="form-group">
        <label for="Tipo">Tipo:</label>
        <input type="text" class="form-control" id="Tipo" name="Tipo" value="<?php echo $this->grupovehiculos->getAtributo('Tipo');?> " >
      </div>
      <div class="form-group">
        <label for="TamanoVehiculo">Tamaño del Vehiculo:</label>
        <input type="text" class="form-control" id="TamanoVehiculo" name="TamanoVehiculo" value="<?php echo $this->grupovehiculos->getAtributo('TamanoVehiculo');?> " >
      </div>
      <div class="form-group">
        <label for="CantPuertas">Cantidad de Puertas:</label>
        <input type="text" class="form-control" id="CantPuertas" name="CantPuertas" value="<?php echo $this->grupovehiculos->getAtributo('CantPuertas');?> " >
      </div>
        <div class="form-group">
        <label for="CantAsientos">Cantidad de Asientos:</label>
        <input type="text" class="form-control" id="CantAsientos" name="CantAsientos" value="<?php echo $this->grupovehiculos->getAtributo('CantAsientos');?> " >
      </div>
        <div class="form-group">
        <label for="CapacidadMaletero">Capacidad de Maletero:</label>
        <input type="text" class="form-control" id="CapacidadMaletero" name="CapacidadMaletero" value="<?php echo $this->grupovehiculos->getAtributo('CapacidadMaletero');?> " >
      </div>
        <div class="form-group">
        <label for="EdadMinima">Edad Minima:</label>
        <input type="text" class="form-control" id="EdadMinima" name="EdadMinima" value="<?php echo $this->grupovehiculos->getAtributo('EdadMinima');?> " >
      </div>

      <button type="submit" class="btn btn-success">Editar</button> 
      <a href="?c=grupovehiculos&m=index" class="btn btn-danger" role="button">Regresar</a>    
    </form>
  

