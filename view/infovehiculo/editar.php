<br><br>
<center>
<h2>Editar Vehiculo: <?php echo $this->infovehiculo->getAtributo('Marca');?> </h2>
</center>
<form action="?c=infovehiculo&m=editar" method="post">
  <div class="form-group">
    <label for="Matricula">Matricula:</label>
    <input type="text" class="form-control" id="Matricula" name="Matricula" value="<?php echo $this->infovehiculo->getAtributo('Matricula');?>" readonly>
  </div>
  <div class="form-group">
    <label for="CodGrupo">Grupo</label>
    <input type="text" class="form-control" id="CodGrupo" name="CodGrupo" value="<?php echo $this->infovehiculo->getAtributo('CodGrupo');?> " >
  </div>
  <div class="form-group">
    <label for="Marca">Marca</label>
    <input type="text" class="form-control" id="Marca" name="Marca" value="<?php echo $this->infovehiculo->getAtributo('Marca');?> " >
  </div>
  <div class="form-group">
    <label for="Modelo">Modelo</label>
    <input type="text" class="form-control" id="Modelo" name="Modelo" value="<?php echo $this->infovehiculo->getAtributo('Modelo');?> " >
  </div>
  <div class="form-group">
    <label for="NPuertas">NPuertas</label>
    <input type="text" class="form-control" id="NPuertas" name="NPuertas" value="<?php echo $this->infovehiculo->getAtributo('NPuertas');?> " >
  </div>
  <div class="form-group">
    <label for="NAsientos">NAsientos</label>
    <input type="text" class="form-control" id="NAsientos" name="NAsientos" value="<?php echo $this->infovehiculo->getAtributo('NAsientos');?> " >
  </div>
  <div class="form-group">
    <label for="CapMaletero">CapMaletero</label>
    <input type="text" class="form-control" id="CapMaletero" name="CapMaletero" value="<?php echo $this->infovehiculo->getAtributo('CapMaletero');?> " >
  </div>
  <div class="form-group">
    <label for="EstadoVehiculo">EstadoVehiculo</label>
    <input type="text" class="form-control" id="EstadoVehiculo" name="EstadoVehiculo" value="<?php echo $this->infovehiculo->getAtributo('EstadoVehiculo');?> " >
  </div>
  <button type="submit" class="btn btn-success">Editar</button>
  <a href="?c=infovehiculo&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
  
<br><br>