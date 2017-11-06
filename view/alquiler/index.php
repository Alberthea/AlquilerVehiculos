
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
<?php $result = $this->alquiler->listar(); ?>
    <h2>Listado de Alquiler</h2> 
    <a href="?c=alquiler&m=agregar"  class="btn btn-primary" role="button">Registrar</a>
   <br>
   <br>   
    <?php if ($result->num_rows): ?>
      <table class="display table table-bordered" id="grilla-alquiler">
        <thead>
          <tr>
            <th>Código del alquiler</th>
            <th>Cédula del cliente</th>
            <th>Nombre del cliente</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Días alquiler</th>
            <th>Tipo de seguro</th>
            <th>Grupo del vehículo</th>
            <th>Matricula</th>
            <th>Precio seguro</th>
            <th>Precio por día</th>
            <th>Precio total</th>
            <th style="width: 120px;">Más</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($result)):?>
            <tr>
              <td><?php echo $row[0]; ?></td>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
              <td><?php echo $row[3]; ?></td>
              <td><?php echo $row[4]; ?></td>
              <td><?php echo $row[5]; ?></td>
              <td><?php echo $row[6]; ?></td>
              <td><?php echo $row[7]; ?></td>
              <td><?php echo $row[8]; ?></td>
              <td><?php echo $row[9]; ?></td>
              <td><?php echo $row[10]; ?></td>
              <td><?php echo $row[11]; ?></td>
              <td><div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="hidden">
                        <a href="?c=alquiler&m=editar&id=<?php echo $row[0]; ?>">
                        <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                    </li>
                    <li>
                      <a href="?c=alquiler&m=eliminar&id=<?php echo $row[0]; ?>">
                       <span  class="glyphicon glyphicon-trash"></span> Eliminar</a>
                    </li>
                     <li>
                      <a href="?c=alquiler&m=ver&id=<?php echo $row[0]; ?>">
                       <span class="glyphicon glyphicon-eye-open"></span> Ver</a>
                    </li>
                  </ul>
                </div></td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <div style="background-color:#b2ff59" class="alert alert-info">
              <center>
                <strong>¡Información!</strong> No hay información.
              </center>
            </div>
          <?php endif; ?>
        </tbody>
      </table>
   <br><br>
 </div>
</div>