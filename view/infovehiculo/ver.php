
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
	<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Detalle del Veviculo
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><strong>Matricula: </strong><?php echo $this->infovehiculo->getAtributo('Matricula');?></li>
				<li class="list-group-item"><strong>Grupo: </strong><?php echo $this->infovehiculo->getAtributo('CodGrupo');?></li>
				<li class="list-group-item"><strong>Marca: </strong><?php echo $this->infovehiculo->getAtributo('Marca');?></li>
				<li class="list-group-item"><strong>Modelo: </strong><?php echo $this->infovehiculo->getAtributo('Modelo');?></li>
				<li class="list-group-item"><strong>NPuertas: </strong><?php echo $this->infovehiculo->getAtributo('NPuertas');?></li>
				<li class="list-group-item"><strong>NAsientos: </strong><?php echo $this->infovehiculo->getAtributo('NAsientos');?></li>
				<li class="list-group-item"><strong>CapMaletero: </strong><?php echo $this->infovehiculo->getAtributo('CapMaletero');?></li>
				<li class="list-group-item"><strong>EstadoVehiculo: </strong><?php echo $this->infovehiculo->getAtributo('EstadoVehiculo');?></li>
			</ul>
			<a href="?c=infovehiculo&m=index" class="btn btn-danger" role="button">Regresar</a>
		</div>
	</div>
</div>
<br><br>
 </div>
</div>