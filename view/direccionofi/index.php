<?php $result = $this->direccionofi->listar(); ?>
        <h2>Listado de Direccion Oficina</h2>   
    <a href="?c=direccionofi&m=agregar"  class="btn btn-primary" role="button">Registrar</a>
   <br>
   <br>   
    <?php if ($result->num_rows): ?>
      <table class="display table table-bordered" id="grilla-DireccionOficina">
        <thead>
          <tr>
            <th>Código</th>
            <th>Calle</th>
            <th>Número</th>
            <th>CodPostal</th>
            <th>Teléfono</th>
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
              <td><div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li>
                        <a href="?c=direccionofi&m=editar&id=<?php echo $row[0]; ?>">
                        <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                    </li>
                    <li>
                      <a href="?c=direccionofi&m=eliminar&id=<?php echo $row[0]; ?>">
                       <span  class="glyphicon glyphicon-trash"></span> Eliminar</a>
                    </li>
                     <li>
                      <a href="?c=direccionofi&m=ver&id=<?php echo $row[0]; ?>">
                       <span class="glyphicon glyphicon-eye-open"></span> ver</a>
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

   
