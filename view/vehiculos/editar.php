<center>
<h2>Editar Vehiculo: <?php echo $this->vehiculos->getAtributo('Marca');?> </h2>
</center>
<form action="?c=vehiculos&m=editar" method="post">
  <div class="form-group">
    <label for="Matricula">Matricula:</label>
    <input type="text" class="form-control" id="Matricula" name="Matricula" value="<?php echo $this->vehiculos->getAtributo('Matricula');?>" readonly>
  </div>
  <div class="form-group">
    <label for="CodGrupo">Grupo</label>
    <input type="text" class="form-control" id="CodGrupo" name="CodGrupo" value="<?php echo $this->vehiculos->getAtributo('CodGrupo');?> " >
  </div>
  <div class="form-group">
    <label for="Marca">Marca</label>
    <input type="text" class="form-control" id="Marca" name="Marca" value="<?php echo $this->vehiculos->getAtributo('Marca');?> " >
  </div>
  <div class="form-group">
    <label for="Modelo">Modelo</label>
    <input type="text" class="form-control" id="Modelo" name="Modelo" value="<?php echo $this->vehiculos->getAtributo('Modelo');?> " >
  </div>
  <button type="submit" class="btn btn-success">Editar</button>
  <a href="?c=vehiculos&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
  
