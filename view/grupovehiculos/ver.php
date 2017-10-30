		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Detalle de Grupos</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><strong>Código del Grupo: </strong><?php echo $this->grupovehiculos->getAtributo('CodGrupo');?></li>
						<li class="list-group-item"><strong>Nombre del Grupo: </strong><?php echo $this->grupovehiculos->getAtributo('NombreGrupo');?></li>
						<li class="list-group-item"><strong>Tipo: </strong><?php echo $this->grupovehiculos->getAtributo('Tipo');?></li>
						<li class="list-group-item"><strong>Tamaño del Vehiculo: </strong><?php echo $this->grupovehiculos->getAtributo('TamanoVehiculo');?></li>
						<li class="list-group-item"><strong>Cantidad de Puertas: </strong><?php echo $this->grupovehiculos->getAtributo('CantPuertas');?></li>
						<li class="list-group-item"><strong>Cantidad de Asientos:</strong><?php echo $this->grupovehiculos->getAtributo('CantAsientos');?></li>
						<li class="list-group-item"><strong>Capacidad de Maletero: </strong><?php echo $this->grupovehiculos->getAtributo('CapacidadMaletero');?></li>
						<li class="list-group-item"><strong>Edad Minima: </strong><?php echo $this->grupovehiculos->getAtributo('EdadMinima');?></li>
					</ul>
					<a href="?c=grupovehiculos&m=index" class="btn btn-danger" role="button">Regresar</a>  

				</div>
			</div>
		</div>

