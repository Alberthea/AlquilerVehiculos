
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Detalle de Grupos</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><strong>Código del grupo: </strong><?php echo $this->infogrupovehiculo->getAtributo('CodGrupo');?></li>
						<li class="list-group-item"><strong>Nombre del grupo: </strong><?php echo $this->infogrupovehiculo->getAtributo('NombreGrupo');?></li>
						<li class="list-group-item"><strong>Tipo de vehículo: </strong><?php echo $this->infogrupovehiculo->getAtributo('Tipo');?></li>
						<li class="list-group-item"><strong>Tamaño del vehículo: </strong><?php echo $this->infogrupovehiculo->getAtributo('TamanoVehiculo');?></li>
						<li class="list-group-item"><strong>Edad mínima: </strong><?php echo $this->infogrupovehiculo->getAtributo('EdadMinima');?></li>
						<li class="list-group-item"><strong>Precio por día: </strong><?php echo $this->infogrupovehiculo->getAtributo('PrecioDia');?></li>
					</ul>
					<a href="?c=infogrupovehiculo&m=index" class="btn btn-danger" role="button">Regresar</a>  

				</div>
			</div>
		</div>
<br><br>
 </div>
</div>