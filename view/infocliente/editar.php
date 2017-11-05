<br><br>
<center>
<h2>Editar Cliente: <?php echo $this->cliente->getAtributo('NombreConductor');?> </h2>
</center>
<form action="?c=cliente&m=editar" method="post">
  <div class="form-group">
    <label for="DNI">Código Cliente:</label>
    <input type="text" class="form-control" id="DNI" name="DNI" value="<?php echo $this->cliente->getAtributo('DNI');?>" readonly>
  </div>
  <div class="form-group">
    <label for="NombreConductor">Nombre de Conductor</label>
    <input type="text" class="form-control" id="NombreConductor" name="NombreConductor" value="<?php echo $this->cliente->getAtributo('NombreConductor');?> " >
  </div>
  <div class="form-group">
    <label for="Apellido1">Apellido Paterno</label>
    <input type="text" class="form-control" id="Apellido1" name="Apellido1" value="<?php echo $this->cliente->getAtributo('Apellido1');?> " >
  </div>
  <div class="form-group">
    <label for="Apellido2">Apellido Materno</label>
    <input type="text" class="form-control" id="Apellido2" name="Apellido2" value="<?php echo $this->cliente->getAtributo('Apellido2');?> " >
  </div>
  <div class="form-group">
    <label for="Edad">Edad</label>
    <input type="text" class="form-control" id="Edad" name="Edad" value="<?php echo $this->cliente->getAtributo('Edad');?> " >
  </div>
  <div class="form-group">
    <label for="Direccion">Direccion</label>
    <input type="text" class="form-control" id="Direccion" name="Direccion" value="<?php echo $this->cliente->getAtributo('Direccion');?> " >
  </div>
  <div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $this->cliente->getAtributo('Telefono');?> " >
  </div>
  <div class="form-group">
    <label for="NumTarjeta">Numero de Tarjeta</label>
    <input type="text" class="form-control" id="NumTarjeta" name="NumTarjeta" value="<?php echo $this->cliente->getAtributo('NumTarjeta');?> " >
  </div>
  <button type="submit" class="btn btn-success">Editar</button>
  <a href="?c=cliente&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
<br><br>