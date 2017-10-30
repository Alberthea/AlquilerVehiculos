<center>
<h2>Editar Oficina: <?php echo $this->oficinas->getAtributo('CiudadOfi');?> </h2>
</center>
<form action="?c=oficinas&m=editar" method="post">
  <div class="form-group">
    <label for="CodOficina">Código Oficina:</label>
    <input type="text" class="form-control" id="CodOficina" name="CodOficina" value="<?php echo $this->oficinas->getAtributo('CodOficina');?>" readonly>
  </div>
  <div class="form-group">
    <label for="NombreOfi">Nombre de Oficina</label>
    <input type="text" class="form-control" id="NombreOfi" name="NombreOfi" value="<?php echo $this->oficinas->getAtributo('NombreOfi');?> " >
  </div>
  <div class="form-group">
    <label for="CiudadOfi">Ciudad de Oficina</label>
    <input type="text" class="form-control" id="CiudadOfi" name="CiudadOfi" value="<?php echo $this->oficinas->getAtributo('CiudadOfi');?> " >
  </div>
  <button type="submit" class="btn btn-success">Editar</button>
  <a href="?c=oficinas&m=index" class="btn btn-danger" role="button">Regresar</a>
</form>
  
