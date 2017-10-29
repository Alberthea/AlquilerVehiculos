<?php 
//  private $Matricula;
// 	private $CodGrupo;
// 	private $Marca;
// 	private $Modelo;
require_once 'model/vehiculos.php';
class vehiculosController
{
	private $vehiculos;
	function __construct()
	{
		$this->
vehiculos = new vehiculos();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/vehiculos/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->vehiculos->setAtributo('Matricula',$_POST['Matricula']);
			$this->vehiculos->setAtributo('CodGrupo',$_POST['CodGrupo']);
			$this->vehiculos->setAtributo('Marca',$_POST['Marca']);
			$this->vehiculos->setAtributo('Modelo',$_POST['Modelo']);
			$this->vehiculos->guardar();
			header('location:?c=vehiculos&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/vehiculos/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->vehiculos->setAtributo('Matricula',$_POST['Matricula']);
			$this->vehiculos->setAtributo('CodGrupo',$_POST['CodGrupo']);
			$this->vehiculos->setAtributo('Marca',$_POST['Marca']);
			$this->vehiculos->setAtributo('Modelo',$_POST['Modelo']);
			$this->vehiculos->actualizar();
			header('location:?c=vehiculos&m=index');
		}
		else{
			$this->vehiculos = $this->vehiculos->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/vehiculos/editar.php';
			require_once 'view/footer.php';		}
		}
	public function eliminar()
	{
		$this->vehiculos->setAtributo('Matricula',$_REQUEST['id']);
		$this->vehiculos->eliminar();
		header('location:?c=vehiculos&m=index');
	}
	public function ver()
	{
		$this->vehiculos = $this->vehiculos->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/vehiculos/ver.php';
		require_once 'view/footer.php';
	}
}
?>