<center>
<h2>Agregar nuevo Oficina</h2>
</center>
<form action="?c=oficinas&m=agregar" method="post">
  <div class="form-group">
    <label for="CodOficina">Código Oficina:</label>
    <input type="text" class="form-control" id="CodOficina" name="CodOficina">
  </div>
  <div class="form-group">
    <label for="NombreOfi">Nombre de Oficina:</label>
    <input type="text" class="form-control" id="NombreOfi" name="NombreOfi">
  </div>
  <div class="form-group">
    <label for="CiudadOfi">Ciudad de Oficina:</label>
    <input type="text" class="form-control" id="CiudadOfi" name="CiudadOfi">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
  <a id="regresar" class="btn btn-danger" role="button" href="?c=oficinas&m=index">Regresar</a>
</form>