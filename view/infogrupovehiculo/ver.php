		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Detalle de Grupos</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><strong>Código del Grupo: </strong><?php echo $this->infogrupovehiculo->getAtributo('CodGrupo');?></li>
						<li class="list-group-item"><strong>Nombre del Grupo: </strong><?php echo $this->infogrupovehiculo->getAtributo('NombreGrupo');?></li>
						<li class="list-group-item"><strong>Tipo: </strong><?php echo $this->infogrupovehiculo->getAtributo('Tipo');?></li>
						<li class="list-group-item"><strong>Tamaño del Vehiculo: </strong><?php echo $this->infogrupovehiculo->getAtributo('TamanoVehiculo');?></li>
						<li class="list-group-item"><strong>Edad Minima: </strong><?php echo $this->infogrupovehiculo->getAtributo('EdadMinima');?></li>
					</ul>
					<a href="?c=infogrupovehiculo&m=index" class="btn btn-danger" role="button">Regresar</a>  

				</div>
			</div>
		</div>

