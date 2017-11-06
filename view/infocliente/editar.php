
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
<center>
<h2>Editar Cliente: <?php echo $this->infocliente->getAtributo('NombreConductor');?> </h2>
</center>
<form action="?c=infocliente&m=editar" method="post">
  <div class="form-group">
    <label for="DNI">Cédula:</label>
    <input type="text" class="form-control" id="DNI" name="DNI" value="<?php echo $this->infocliente->getAtributo('DNI');?>" readonly>
  </div>
  <div class="form-group">
    <label for="NombreConductor">Nombre</label>
    <input type="text" class="form-control" id="NombreConductor" name="NombreConductor" value="<?php echo $this->infocliente->getAtributo('NombreConductor');?> " >
  </div>
  <div class="form-group">
    <label for="Apellido1">Apellido paterno</label>
    <input type="text" class="form-control" id="Apellido1" name="Apellido1" value="<?php echo $this->infocliente->getAtributo('Apellido1');?> " >
  </div>
  <div class="form-group">
    <label for="Apellido2">Apellido materno</label>
    <input type="text" class="form-control" id="Apellido2" name="Apellido2" value="<?php echo $this->infocliente->getAtributo('Apellido2');?> " >
  </div>
  <div class="form-group">
    <label for="Edad">Edad</label>
    <input type="text" class="form-control" id="Edad" name="Edad" value="<?php echo $this->infocliente->getAtributo('Edad');?> " >
  </div>
  <div class="form-group">
    <label for="Direccion">Dirección</label>
    <input type="text" class="form-control" id="Direccion" name="Direccion" value="<?php echo $this->infocliente->getAtributo('Direccion');?> " >
  </div>
  <div class="form-group">
    <label for="Telefono">Teléfono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $this->infocliente->getAtributo('Telefono');?> " >
  </div>
  <div class="form-group">
    <label for="NumTarjeta">Número de tarjeta</label>
    <input type="text" class="form-control" id="NumTarjeta" name="NumTarjeta" value="<?php echo $this->infocliente->getAtributo('NumTarjeta');?> " >
  </div>
  <button type="submit" class="btn btn-success">Editar</button>
  <a href="?c=infocliente&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
<br><br>
 </div>
</div>