<br><br>
	<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Detalle del Cliente
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><strong>Código Cliente: </strong><?php echo $this->cliente->getAtributo('DNI');?></li>
				<li class="list-group-item"><strong>Nombre de Conductor: </strong><?php echo $this->cliente->getAtributo('NombreConductor');?></li>
				<li class="list-group-item"><strong>Apellido Paterno: </strong><?php echo $this->cliente->getAtributo('Apellido1');?></li>
				<li class="list-group-item"><strong>Apellido Materno: </strong><?php echo $this->cliente->getAtributo('Apellido2');?></li>
				<li class="list-group-item"><strong>Edad: </strong><?php echo $this->cliente->getAtributo('Edad');?></li>
				<li class="list-group-item"><strong>Direccion: </strong><?php echo $this->cliente->getAtributo('Direccion');?></li>
				<li class="list-group-item"><strong>Telefono: </strong><?php echo $this->cliente->getAtributo('Telefono');?></li>
				<li class="list-group-item"><strong>Numero de Tarjeta: </strong><?php echo $this->cliente->getAtributo('NumTarjeta');?></li>
			</ul>
			<a href="?c=cliente&m=index" class="btn btn-danger" role="button">Regresar</a>
		</div>
	</div>
</div>
<br><br>