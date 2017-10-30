<center>
<h2>Agregar nueva Direccion Oficina</h2>
</center>
<form action="?c=direccionofi&m=agregar" method="post">
  <div class="form-group">
    <label for="CodOficina">Código Oficina:</label>
    <input type="text" class="form-control" id="CodOficina" name="CodOficina">
  </div>
  <div class="form-group">
    <label for="Calle">Nombre de Calle:</label>
    <input type="text" class="form-control" id="Calle" name="Calle">
  </div>
  <div class="form-group">
    <label for="Numero">Número de Calle:</label>
    <input type="text" class="form-control" id="Numero" name="Numero">
  </div>
  <div class="form-group">
    <label for="CodPostal">Código Postal:</label>
    <input type="text" class="form-control" id="CodPostal" name="CodPostal">
  </div>
  <div class="form-group">
    <label for="Telefono">Teléfono:</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
  <a id="regresar" class="btn btn-danger" role="button" href="?c=direccionofi&m=index">Regresar</a>
</form>