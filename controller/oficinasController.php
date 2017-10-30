<?php
require_once 'model/oficinas.php';
class oficinasController
{
	private $oficinas;
	function __construct()
	{
		$this->oficinas = new oficinas();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/oficinas/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->oficinas->setAtributo('CodOficina',$_POST['CodOficina']);
			$this->oficinas->setAtributo('NombreOfi',$_POST['NombreOfi']);
			$this->oficinas->setAtributo('CiudadOfi',$_POST['CiudadOfi']);
			$this->oficinas->guardar();
			header('location:?c=oficinas&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/oficinas/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->oficinas->setAtributo('CodOficina',$_POST['CodOficina']);
			$this->oficinas->setAtributo('NombreOfi',$_POST['NombreOfi']);
			$this->oficinas->setAtributo('CiudadOfi',$_POST['CiudadOfi']);
			$this->oficinas->actualizar();
			header('location:?c=oficinas&m=index');
		}
		else{
			$this->oficinas = $this->oficinas->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/oficinas/editar.php';
			require_once 'view/footer.php';		}
		}
	public function eliminar()
	{
		$this->oficinas->setAtributo('CodOficina',$_REQUEST['id']);
		$this->oficinas->eliminar();
		header('location:?c=oficinas&m=index');
	}
	public function ver()
	{
		$this->oficinas = $this->oficinas->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/oficinas/ver.php';
		require_once 'view/footer.php';
	}
}
?>