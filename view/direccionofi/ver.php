	<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Detalle de Direccion Oficina
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><strong>Código Oficina: </strong><?php echo $this->direccionofi->getAtributo('CodOficina');?></li>
				<li class="list-group-item"><strong>Nombre de Calle: </strong><?php echo $this->direccionofi->getAtributo('Calle');?></li>
				<li class="list-group-item"><strong>Número de Calle: </strong><?php echo $this->direccionofi->getAtributo('Numero');?></li>
				<li class="list-group-item"><strong>Código de Postal: </strong><?php echo $this->direccionofi->getAtributo('CodPostal');?></li>
				<li class="list-group-item"><strong>Teléfono: </strong><?php echo $this->direccionofi->getAtributo('Telefono');?></li>
			</ul>
			<a href="?c=direccionofi&m=index" class="btn btn-danger" role="button">Regresar</a>
		</div>
	</div>
</div>
