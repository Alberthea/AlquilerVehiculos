<?php 
/*
	private $CodAlquiler;
	private $DNI;
	private $DuracionDiasAlquiler;
	private $CodTipoSeguro;
	private $Matricula;
	private $PrecioTotal;
 */
require_once 'model/alquiler.php';
class alquilerController
{
	private $alquiler;
	function __construct()
	{
		$this->alquiler = new alquiler();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/alquiler/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->alquiler->setAtributo('CodAlquiler',$_POST['CodAlquiler']);
			$this->alquiler->setAtributo('DNI',$_POST['DNI']);
			$this->alquiler->setAtributo('DuracionDiasAlquiler',$_POST['DuracionDiasAlquiler']);
			$this->alquiler->setAtributo('CodTipoSeguro',$_POST['CodTipoSeguro']);
			$this->alquiler->setAtributo('Matricula',$_POST['Matricula']);
			$this->alquiler->guardar();
			header('location:?c=alquiler&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/alquiler/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->alquiler->setAtributo('CodAlquiler',$_POST['CodAlquiler']);
			$this->alquiler->setAtributo('DNI',$_POST['DNI']);
			$this->alquiler->setAtributo('DuracionDiasAlquiler',$_POST['DuracionDiasAlquiler']);
			$this->alquiler->setAtributo('CodTipoSeguro',$_POST['CodTipoSeguro']);
			$this->alquiler->setAtributo('Matricula',$_POST['Matricula']);
			$this->alquiler->actualizar();
			header('location:?c=alquiler&m=index');
		}
		else{
			$this->alquiler = $this->alquiler->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/alquiler/editar.php';
			require_once 'view/footer.php';		}
		}
	public function eliminar()
	{
		$this->alquiler->setAtributo('CodAlquiler',$_REQUEST['id']);
		$this->alquiler->eliminar();
		header('location:?c=alquiler&m=index');
	}
	public function ver()
	{
		$this->alquiler = $this->alquiler->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/alquiler/ver.php';
		require_once 'view/footer.php';
	}
}
?>