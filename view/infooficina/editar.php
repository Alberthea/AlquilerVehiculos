
  

<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
<center>
<h2>Editar Oficina: <?php echo $this->infooficina->getAtributo('NombreOfi');?> </h2>
</center>
<form action="?c=infooficina&m=editar" method="post">
  <div class="form-group">
    <label for="CodOficina">Código Oficina:</label>
    <input type="text" class="form-control" id="CodOficina" name="CodOficina" value="<?php echo $this->infooficina->getAtributo('CodOficina');?>" readonly>
  </div>
  <div class="form-group">
    <label for="NombreOfi">Nombre de Oficina</label>
    <input type="text" class="form-control" id="NombreOfi" name="NombreOfi" value="<?php echo $this->infooficina->getAtributo('NombreOfi');?> " >
  </div>
  <div class="form-group">
    <label for="CiudadOfi">Ciudad de Oficina</label>
    <input type="text" class="form-control" id="CiudadOfi" name="CiudadOfi" value="<?php echo $this->infooficina->getAtributo('CiudadOfi');?> " >
  </div>
  <div class="form-group">
    <label for="Calle">Nombre de Calle</label>
    <input type="text" class="form-control" id="Calle" name="Calle" value="<?php echo $this->infooficina->getAtributo('Calle');?> " >
  </div>
  <div class="form-group">
    <label for="Numero">Número de Calle</label>
    <input type="text" class="form-control" id="Numero" name="Numero" value="<?php echo $this->infooficina->getAtributo('Numero');?> " >
  </div>
  <div class="form-group">
    <label for="CodPostal">Código de Postal</label>
    <input type="text" class="form-control" id="CodPostal" name="CodPostal" value="<?php echo $this->infooficina->getAtributo('CodPostal');?> " >
  </div>
  <div class="form-group">
    <label for="Telefono">Teléfono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $this->infooficina->getAtributo('Telefono');?> " >
  </div>
  <button type="submit" class="btn btn-success">Editar</button>
  <a href="?c=infooficina&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
<br><br>
 </div>
</div>