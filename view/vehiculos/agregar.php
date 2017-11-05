<center>
<h2>Agregar nuevo Vehiculo</h2>
</center>
<form action="?c=vehiculos&m=agregar" method="post">
  <div class="form-group">
    <label for="Matricula">Matricula:</label>
    <input type="text" class="form-control" id="Matricula" name="Matricula">
  </div>
  <div class="form-group">
    <label for="CodGrupo">Grupo:</label>
    <input type="text" class="form-control" id="CodGrupo" name="CodGrupo">
  </div>
  <div class="form-group">
    <label for="Marca">Marca:</label>
    <input type="text" class="form-control" id="Marca" name="Marca">
  </div>
  <div class="form-group">
    <label for="Modelo">Modelo:</label>
    <input type="text" class="form-control" id="Modelo" name="Modelo">
  </div>
  <button type="submit" class="btn btn-success">Guardar</button>
  <a class="btn btn-danger" role="button" href="?c=vehiculos&m=index">Regresar</a>
</form>