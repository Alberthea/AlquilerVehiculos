
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
<center>
<h2>Agregar nueva Oficina</h2>
</center>
<form action="?c=infooficina&m=agregar" method="post">
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
  <a id="regresar" class="btn btn-danger" role="button" href="?c=infooficina&m=index">Regresar</a>
</form>
<br><br>
 </div>
</div>