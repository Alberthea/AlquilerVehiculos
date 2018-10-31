<?php 
//  private $CodTipoSeguro;
// 	private $NombreSeguro;
// 	private $DescripcionSeguro;
require_once 'model/seguros.php';
class segurosController
{
	private $seguros;
	function __construct()
	{
		$this->seguros = new seguros();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/seguros/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->seguros->setAtributo('CodTipoSeguro',$_POST['CodTipoSeguro']);
			$this->seguros->setAtributo('NombreSeguro',$_POST['NombreSeguro']);
			$this->seguros->setAtributo('DescripcionSeguro',$_POST['DescripcionSeguro']);
			$this->seguros->setAtributo('MontoSeguro',$_POST['MontoSeguro']);
			$this->seguros->guardar();
			header('location:?c=seguros&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/seguros/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->seguros->setAtributo('CodTipoSeguro',$_POST['CodTipoSeguro']);
			$this->seguros->setAtributo('NombreSeguro',$_POST['NombreSeguro']);
			$this->seguros->setAtributo('DescripcionSeguro',$_POST['DescripcionSeguro']);
			$this->seguros->setAtributo('MontoSeguro',$_POST['MontoSeguro']);
			$this->seguros->actualizar();
			header('location:?c=seguros&m=index');
		}
		else{
			$this->seguros = $this->seguros->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/seguros/editar.php';
			require_once 'view/footer.php';		}
		}
	public function eliminar()
	{
		$this->seguros->setAtributo('CodTipoSeguro',$_REQUEST['id']);
		$this->seguros->eliminar();
		header('location:?c=seguros&m=index');
	}
	public function ver()
	{
		$this->seguros = $this->seguros->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/seguros/ver.php';
		require_once 'view/footer.php';
	}
}
?>