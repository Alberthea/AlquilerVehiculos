
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
	<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Detalle del Cliente
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><strong>Cédula: </strong><?php echo $this->cliente->getAtributo('DNI');?></li>
				<li class="list-group-item"><strong>Nombre: </strong><?php echo $this->cliente->getAtributo('NombreConductor');?></li>
				<li class="list-group-item"><strong>Apellido paterno: </strong><?php echo $this->cliente->getAtributo('Apellido1');?></li>
				<li class="list-group-item"><strong>Apellido materno: </strong><?php echo $this->cliente->getAtributo('Apellido2');?></li>
				<li class="list-group-item"><strong>Edad: </strong><?php echo $this->cliente->getAtributo('Edad');?></li>
				<li class="list-group-item"><strong>Dirección: </strong><?php echo $this->cliente->getAtributo('Direccion');?></li>
				<li class="list-group-item"><strong>Teléfono: </strong><?php echo $this->cliente->getAtributo('Telefono');?></li>
				<li class="list-group-item"><strong>Número de Tarjeta: </strong><?php echo $this->cliente->getAtributo('NumTarjeta');?></li>
			</ul>
			<a href="?c=cliente&m=index" class="btn btn-danger" role="button">Regresar</a>
		</div>
	</div>
</div>
<br><br>
 </div>
</div>