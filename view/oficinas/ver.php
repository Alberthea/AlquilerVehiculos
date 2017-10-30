	<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Detalle del Oficina
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><strong>Código Oficina: </strong><?php echo $this->vehiculos->getAtributo('CodOficina');?></li>
				<li class="list-group-item"><strong>Nombre de Oficina: </strong><?php echo $this->vehiculos->getAtributo('NombreOfi');?></li>
				<li class="list-group-item"><strong>Ciudad de Oficina: </strong><?php echo $this->vehiculos->getAtributo('CiudadOfi');?></li>
			</ul>
			<a href="?c=vehiculos&m=index" class="btn btn-danger" role="button">Regresar</a>
		</div>
	</div>
</div>
