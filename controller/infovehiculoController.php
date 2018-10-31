<?php 
/*
	private $Matricula;
	private $CodGrupo;
	private $Marca;
	private $Modelo;
	private $NPuertas;
	private $NAsientos;
	private $CapMaletero;
	private $EstadoVehiculo;
 */
require_once 'model/infovehiculo.php';
class infovehiculoController
{
	private $infovehiculo;
	function __construct()
	{
		$this->infovehiculo = new infovehiculo();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/infovehiculo/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->infovehiculo->setAtributo('Matricula',$_POST['Matricula']);
			$this->infovehiculo->setAtributo('CodGrupo',$_POST['CodGrupo']);
			$this->infovehiculo->setAtributo('Marca',$_POST['Marca']);
			$this->infovehiculo->setAtributo('NPuertas',$_POST['NPuertas']);
			$this->infovehiculo->setAtributo('NAsientos',$_POST['NAsientos']);
			$this->infovehiculo->setAtributo('CapMaletero',$_POST['CapMaletero']);
			$this->infovehiculo->setAtributo('EstadoVehiculo',$_POST['EstadoVehiculo']);
			$this->infovehiculo->guardar();
			header('location:?c=infovehiculo&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/infovehiculo/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->infovehiculo->setAtributo('Matricula',$_POST['Matricula']);
			$this->infovehiculo->setAtributo('CodGrupo',$_POST['CodGrupo']);
			$this->infovehiculo->setAtributo('Marca',$_POST['Marca']);
			$this->infovehiculo->setAtributo('NPuertas',$_POST['NPuertas']);
			$this->infovehiculo->setAtributo('NAsientos',$_POST['NAsientos']);
			$this->infovehiculo->setAtributo('CapMaletero',$_POST['CapMaletero']);
			$this->infovehiculo->setAtributo('EstadoVehiculo',$_POST['EstadoVehiculo']);
			$this->infovehiculo->actualizar();
			header('location:?c=infovehiculo&m=index');
		}
		else{
			$this->infovehiculo = $this->infovehiculo->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/infovehiculo/editar.php';
			require_once 'view/footer.php';		}
		}
	public function eliminar()
	{
		$this->infovehiculo->setAtributo('Matricula',$_REQUEST['id']);
		$this->infovehiculo->eliminar();
		header('location:?c=infovehiculo&m=index');
	}
	public function ver()
	{
		$this->infovehiculo = $this->infovehiculo->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/infovehiculo/ver.php';
		require_once 'view/footer.php';
	}
}
?>