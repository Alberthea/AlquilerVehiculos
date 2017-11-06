
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
  <br><br><br><br><br>
  <center><h2>Agregar nuevo Alquiler</h2></center>
  <form action="?c=alquiler&m=agregar" method="post">
    <div class="form-group">
      <label for="CodAlquiler">Código del alquiler:</label>
      <input type="text" class="form-control" id="CodAlquiler" name="CodAlquiler">
    </div>
    <div class="form-group">
      <label for="DNI">Nombre del cliente:</label>
      <input type="text" class="form-control" id="DNI" name="DNI">
    </div>
    <div class="form-group">
      <label for="DuracionDiasAlquiler">Duración de días:</label>
      <input type="text" class="form-control" id="DuracionDiasAlquiler" name="DuracionDiasAlquiler">
    </div>
    <div class="form-group">
      <label for="CodTipoSeguro">Tipo de seguro:</label>
      <input type="text" class="form-control" id="CodTipoSeguro" name="CodTipoSeguro">
    </div>
    <div class="form-group">
      <label for="Matricula">Matricula:</label>
      <input type="text" class="form-control" id="Matricula" name="Matricula">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a id="regresar" class="btn btn-danger" role="button" href="?c=alquiler&m=index">Regresar</a>
  </form>
  <br><br>
 </div>
</div>