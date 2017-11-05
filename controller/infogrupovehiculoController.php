<?php
/*
	private $CodGrupo;
	private $NombreGrupo;
	private $Tipo;
	private $TamanoVehiculo;
	private $EdadMinima;
 */
require_once 'model/infogrupovehiculo.php';
class infogrupovehiculoController
{
	private $infogrupovehiculo;
	function __construct()
	{
		$this->infogrupovehiculo = new infogrupovehiculo();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/infogrupovehiculo/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		
		if ($_POST) {
			$this->infogrupovehiculo->setAtributo('CodGrupo',$_POST['CodGrupo']);
			$this->infogrupovehiculo->setAtributo('NombreGrupo',$_POST['NombreGrupo']);
			$this->infogrupovehiculo->setAtributo('Tipo',$_POST['Tipo']);
			$this->infogrupovehiculo->setAtributo('TamanoVehiculo',$_POST['TamanoVehiculo']);
			$this->infogrupovehiculo->setAtributo('EdadMinima',$_POST['EdadMinima']);
			$this->infogrupovehiculo->guardar();
			header('location:?c=infogrupovehiculo&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/infogrupovehiculo/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->infogrupovehiculo->setAtributo('CodGrupo',$_POST['CodGrupo']);
			$this->infogrupovehiculo->setAtributo('NombreGrupo',$_POST['NombreGrupo']);
			$this->infogrupovehiculo->setAtributo('Tipo',$_POST['Tipo']);
			$this->infogrupovehiculo->setAtributo('TamanoVehiculo',$_POST['TamanoVehiculo']);
			$this->infogrupovehiculo->setAtributo('EdadMinima',$_POST['EdadMinima']);
			$this->infogrupovehiculo->actualizar();
			header('location:?c=infogrupovehiculo&m=index');
		}
		else{
			$this->infogrupovehiculo = $this->infogrupovehiculo->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/infogrupovehiculo/editar.php';
			require_once 'view/footer.php';
		}
	}

	public function eliminar()
	{
		$this->infogrupovehiculo->setAtributo('CodGrupo',$_REQUEST['id']);
		$this->infogrupovehiculo->eliminar();
		header('location:?c=infogrupovehiculo&m=index');
	}

	public function ver()
	{
		$this->infogrupovehiculo = $this->infogrupovehiculo->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/infogrupovehiculo/ver.php';
		require_once 'view/footer.php';
	}
}
?>