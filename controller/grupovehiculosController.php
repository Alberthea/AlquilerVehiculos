<?php
require_once 'model/grupovehiculos.php';
class grupovehiculosController
{
	private $grupovehiculos;
	function __construct()
	{
		$this->grupovehiculos = new grupovehiculos();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/grupovehiculos/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		
		if ($_POST) {
			$this->grupovehiculos->setAtributo('CodGrupo',$_POST['CodGrupo']);
			$this->grupovehiculos->setAtributo('NombreGrupo',$_POST['NombreGrupo']);
			$this->grupovehiculos->setAtributo('Tipo',$_POST['Tipo']);
			$this->grupovehiculos->setAtributo('TamanoVehiculo',$_POST['TamanoVehiculo']);
			$this->grupovehiculos->setAtributo('CantPuertas',$_POST['CantPuertas']);
			$this->grupovehiculos->setAtributo('CantAsientos',$_POST['CantAsientos']);
			$this->grupovehiculos->setAtributo('CapacidadMaletero',$_POST['CapacidadMaletero']);
			$this->grupovehiculos->setAtributo('EdadMinima',$_POST['EdadMinima']);
			$this->grupovehiculos->guardar();
			header('location:?c=grupovehiculos&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/grupovehiculos/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->grupovehiculos->setAtributo('CodGrupo',$_POST['CodGrupo']);
			$this->grupovehiculos->setAtributo('NombreGrupo',$_POST['NombreGrupo']);
			$this->grupovehiculos->setAtributo('Tipo',$_POST['Tipo']);
			$this->grupovehiculos->setAtributo('TamanoVehiculo',$_POST['TamanoVehiculo']);
			$this->grupovehiculos->setAtributo('CantPuertas',$_POST['CantPuertas']);
			$this->grupovehiculos->setAtributo('CantAsientos',$_POST['CantAsientos']);
			$this->grupovehiculos->setAtributo('CapacidadMaletero',$_POST['CapacidadMaletero']);
			$this->grupovehiculos->setAtributo('EdadMinima',$_POST['EdadMinima']);
			$this->grupovehiculos->actualizar();
			header('location:?c=grupovehiculos&m=index');
		}
		else{
			$this->grupovehiculos = $this->grupovehiculos->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/grupovehiculos/editar.php';
			require_once 'view/footer.php';
		}
	}

	public function eliminar()
	{
		$this->grupovehiculos->setAtributo('CodGrupo',$_REQUEST['id']);
		$this->grupovehiculos->eliminar();
		header('location:?c=grupovehiculos&m=index');
	}

	public function ver()
	{
		$this->grupovehiculos = $this->grupovehiculos->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/grupovehiculos/ver.php';
		require_once 'view/footer.php';
	}
}
?>