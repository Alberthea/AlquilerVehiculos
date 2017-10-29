	<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Detalle del Veviculo
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><strong>Matricula: </strong><?php echo $this->vehiculos->getAtributo('Matricula');?></li>
				<li class="list-group-item"><strong>Grupo: </strong><?php echo $this->vehiculos->getAtributo('CodGrupo');?></li>
				<li class="list-group-item"><strong>Marca: </strong><?php echo $this->vehiculos->getAtributo('Marca');?></li>
				<li class="list-group-item"><strong>Modelo: </strong><?php echo $this->vehiculos->getAtributo('Modelo');?></li>
			</ul>
			<a href="?c=vehiculos&m=index" class="btn btn-danger" role="button">Regresar</a>
		</div>
	</div>
</div>
