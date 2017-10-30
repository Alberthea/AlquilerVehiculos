<center>
<h2>Editar Direccion Oficina: <?php echo $this->direccionofi->getAtributo('Numero');?> </h2>
</center>
<form action="?c=direccionofi&m=editar" method="post">
  <div class="form-group">
    <label for="CodOficina">Código Oficina:</label>
    <input type="text" class="form-control" id="CodOficina" name="CodOficina" value="<?php echo $this->direccionofi->getAtributo('CodOficina');?>" readonly>
  </div>
  <div class="form-group">
    <label for="Calle">Nombre de Calle</label>
    <input type="text" class="form-control" id="Calle" name="Calle" value="<?php echo $this->direccionofi->getAtributo('Calle');?> " >
  </div>
  <div class="form-group">
    <label for="Numero">Número de Calle</label>
    <input type="text" class="form-control" id="Numero" name="Numero" value="<?php echo $this->direccionofi->getAtributo('Numero');?> " >
  </div>
  <div class="form-group">
    <label for="CodPostal">Código de Postal</label>
    <input type="text" class="form-control" id="CodPostal" name="CodPostal" value="<?php echo $this->direccionofi->getAtributo('CodPostal');?> " >
  </div>
  <div class="form-group">
    <label for="Telefono">Teléfono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $this->direccionofi->getAtributo('Telefono');?> " >
  </div>
  <button type="submit" class="btn btn-success">Editar</button>
  <a href="?c=direccionofi&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
  
