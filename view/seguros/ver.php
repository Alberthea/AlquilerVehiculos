	<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Detalle del Seguros
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><strong>Código Seguros: </strong><?php echo $this->seguros->getAtributo('CodTipoSeguro');?></li>
				<li class="list-group-item"><strong>Nombre de Seguros: </strong><?php echo $this->seguros->getAtributo('NombreSeguro');?></li>
				<li class="list-group-item"><strong>Ciudad de Seguros: </strong><?php echo $this->seguros->getAtributo('DescripcionSeguro');?></li>
			</ul>
			<a href="?c=seguros&m=index" class="btn btn-danger" role="button">Regresar</a>
		</div>
	</div>
</div>
