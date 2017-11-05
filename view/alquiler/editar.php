<br><br>
<center>
<h2>Editar Seguro: <?php echo $this->alquiler->getAtributo('DNI');?> </h2>
</center>
<form action="?c=alquiler&m=editar" method="post">
  <div class="form-group">
    <label for="CodAlquiler">Código Seguro:</label>
    <input type="text" class="form-control" id="CodAlquiler" name="CodAlquiler" value="<?php echo $this->alquiler->getAtributo('CodAlquiler');?>" readonly>
  </div>
  <div class="form-group">
    <label for="DNI">Nombre de Seguro</label>
    <input type="text" class="form-control" id="DNI" name="DNI" value="<?php echo $this->alquiler->getAtributo('DNI');?> " >
  </div>
  <div class="form-group">
    <label for="DuracionDiasAlquiler">Ciudad de Seguro</label>
    <input type="text" class="form-control" id="DuracionDiasAlquiler" name="DuracionDiasAlquiler" value="<?php echo $this->alquiler->getAtributo('DuracionDiasAlquiler');?> " >
  </div>
  <div class="form-group">
    <label for="CodTipoSeguro">Ciudad de Seguro</label>
    <input type="text" class="form-control" id="CodTipoSeguro" name="CodTipoSeguro" value="<?php echo $this->alquiler->getAtributo('CodTipoSeguro');?> " >
  </div>
  <div class="form-group">
    <label for="Matricula">Ciudad de Seguro</label>
    <input type="text" class="form-control" id="Matricula" name="Matricula" value="<?php echo $this->alquiler->getAtributo('Matricula');?> " >
  </div>
  <button type="submit" class="btn btn-success">Editar</button>
  <a href="?c=alquiler&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
<br><br>