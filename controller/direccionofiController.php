<?php
require_once 'model/direccionofi.php';
class direccionofiController
{
	private $direccionofi;
	function __construct()
	{
		$this->direccionofi = new direccionofi();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/direccionofi/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->direccionofi->setAtributo('CodOficina',$_POST['CodOficina']);
			$this->direccionofi->setAtributo('Calle',$_POST['Calle']);
			$this->direccionofi->setAtributo('Numero',$_POST['Numero']);
			$this->direccionofi->setAtributo('CodPostal',$_POST['CodPostal']);
			$this->direccionofi->setAtributo('Telefono',$_POST['Telefono']);
			$this->direccionofi->guardar();
			header('location:?c=direccionofi&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/direccionofi/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->direccionofi->setAtributo('CodOficina',$_POST['CodOficina']);
			$this->direccionofi->setAtributo('Calle',$_POST['Calle']);
			$this->direccionofi->setAtributo('Numero',$_POST['Numero']);
			$this->direccionofi->setAtributo('CodPostal',$_POST['CodPostal']);
			$this->direccionofi->setAtributo('Telefono',$_POST['Telefono']);
			$this->direccionofi->actualizar();
			header('location:?c=direccionofi&m=index');
		}
		else{
			$this->direccionofi = $this->direccionofi->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/direccionofi/editar.php';
			require_once 'view/footer.php';		}
		}
	public function eliminar()
	{
		$this->direccionofi->setAtributo('CodOficina',$_REQUEST['id']);
		$this->direccionofi->eliminar();
		header('location:?c=direccionofi&m=index');
	}
	public function ver()
	{
		$this->direccionofi = $this->direccionofi->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/direccionofi/ver.php';
		require_once 'view/footer.php';
	}
}
?>