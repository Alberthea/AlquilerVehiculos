<?php
require_once 'model/infooficina.php';
class infooficinaController
{
	private $infooficina;
	function __construct()
	{
		$this->infooficina = new infooficina();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/infooficina/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->infooficina->setAtributo('CodOficina',$_POST['CodOficina']);
			$this->infooficina->setAtributo('NombreOfi',$_POST['NombreOfi']);
			$this->infooficina->setAtributo('CiudadOfi',$_POST['CiudadOfi']);
			$this->infooficina->setAtributo('Calle',$_POST['Calle']);
			$this->infooficina->setAtributo('Numero',$_POST['Numero']);
			$this->infooficina->setAtributo('CodPostal',$_POST['CodPostal']);
			$this->infooficina->setAtributo('Telefono',$_POST['Telefono']);
			$this->infooficina->guardar();
			header('location:?c=infooficina&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/infooficina/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->infooficina->setAtributo('CodOficina',$_POST['CodOficina']);
			$this->infooficina->setAtributo('NombreOfi',$_POST['NombreOfi']);
			$this->infooficina->setAtributo('CiudadOfi',$_POST['CiudadOfi']);
			$this->infooficina->setAtributo('Calle',$_POST['Calle']);
			$this->infooficina->setAtributo('Numero',$_POST['Numero']);
			$this->infooficina->setAtributo('CodPostal',$_POST['CodPostal']);
			$this->infooficina->setAtributo('Telefono',$_POST['Telefono']);
			$this->infooficina->actualizar();
			header('location:?c=infooficina&m=index');
		}
		else{
			$this->infooficina = $this->infooficina->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/infooficina/editar.php';
			require_once 'view/footer.php';		}
		}
	public function eliminar()
	{
		$this->infooficina->setAtributo('CodOficina',$_REQUEST['id']);
		$this->infooficina->eliminar();
		header('location:?c=infooficina&m=index');
	}
	public function ver()
	{
		$this->infooficina = $this->infooficina->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/infooficina/ver.php';
		require_once 'view/footer.php';
	}
}
?>