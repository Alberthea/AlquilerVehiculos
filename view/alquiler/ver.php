
<div class="container-fluid">
 <div class="col-md-8 col-md-offset-2">
   <br><br><br><br><br>
	<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Detalle del Alquiler
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><strong>Código del alquiler: </strong><?php echo $this->alquiler->getAtributo('CodAlquiler');?></li>
				<li class="list-group-item"><strong>Nombre del cliente: </strong><?php echo $this->alquiler->getAtributo('DNI');?></li>
				<li class="list-group-item"><strong>Duración de días: </strong><?php echo $this->alquiler->getAtributo('DuracionDiasAlquiler');?></li>
				<li class="list-group-item"><strong>Tipo de Seguro: </strong><?php echo $this->alquiler->getAtributo('CodTipoSeguro');?></li>
				<li class="list-group-item"><strong>Matricula: </strong><?php echo $this->seguros->getAtributo('Matricula');?></li>
				<li class="list-group-item"><strong>Precio Total: </strong><?php echo $this->seguros->getAtributo('PrecioTotal');?></li>
			</ul>
			<a href="?c=alquiler&m=index" class="btn btn-danger" role="button">Regresar</a>
		</div>
	</div>
</div>
<br><br>
 </div>
</div>