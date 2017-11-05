<br><br>
<center>
<h2>Editar Seguro: <?php echo $this->seguros->getAtributo('DescripcionSeguro');?> </h2>
</center>
<form action="?c=seguros&m=editar" method="post">
  <div class="form-group">
    <label for="CodTipoSeguro">Código Seguro:</label>
    <input type="text" class="form-control" id="CodTipoSeguro" name="CodTipoSeguro" value="<?php echo $this->seguros->getAtributo('CodTipoSeguro');?>" readonly>
  </div>
  <div class="form-group">
    <label for="NombreSeguro">Nombre de Seguro</label>
    <input type="text" class="form-control" id="NombreSeguro" name="NombreSeguro" value="<?php echo $this->seguros->getAtributo('NombreSeguro');?> " >
  </div>
  <div class="form-group">
    <label for="DescripcionSeguro">Ciudad de Seguro</label>
    <input type="text" class="form-control" id="DescripcionSeguro" name="DescripcionSeguro" value="<?php echo $this->seguros->getAtributo('DescripcionSeguro');?> " >
  </div>
  <button type="submit" class="btn btn-success">Editar</button>
  <a href="?c=seguros&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
  
<br><br>