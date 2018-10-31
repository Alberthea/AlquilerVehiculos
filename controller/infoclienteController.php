<?php 
/*
	private $DNI;
	private $NombreConductor;
	private $Apellido1;
	private $Apellido2;
	private $Edad;
	private $Direccion;
	private $Telefono;
	private $NumTarjeta;
 */
require_once 'model/infocliente.php';
class infoclienteController
{
	private $infocliente;
	function __construct()
	{
		$this->infocliente = new infocliente();
	}
	public function index()
	{
		require_once 'view/header.php';
		require_once 'view/infocliente/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->infocliente->setAtributo('DNI',$_POST['DNI']);
			$this->infocliente->setAtributo('NombreConductor',$_POST['NombreConductor']);
			$this->infocliente->setAtributo('Apellido1',$_POST['Apellido1']);
			$this->infocliente->setAtributo('Apellido2',$_POST['Apellido2']);
			$this->infocliente->setAtributo('Edad',$_POST['Edad']);
			$this->infocliente->setAtributo('Direccion',$_POST['Direccion']);
			$this->infocliente->setAtributo('Telefono',$_POST['Telefono']);
			$this->infocliente->setAtributo('NumTarjeta',$_POST['NumTarjeta']);
			$this->infocliente->guardar();
			header('location:?c=infocliente&m=index');
		}
		else{
			require_once 'view/header.php';
			require_once 'view/infocliente/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->infocliente->setAtributo('DNI',$_POST['DNI']);
			$this->infocliente->setAtributo('NombreConductor',$_POST['NombreConductor']);
			$this->infocliente->setAtributo('Apellido1',$_POST['Apellido1']);
			$this->infocliente->setAtributo('Apellido2',$_POST['Apellido2']);
			$this->infocliente->setAtributo('Edad',$_POST['Edad']);
			$this->infocliente->setAtributo('Direccion',$_POST['Direccion']);
			$this->infocliente->setAtributo('Telefono',$_POST['Telefono']);
			$this->infocliente->setAtributo('NumTarjeta',$_POST['NumTarjeta']);
			$this->infocliente->actualizar();
			header('location:?c=infocliente&m=index');
		}
		else{
			$this->infocliente = $this->infocliente->buscar($_REQUEST['id']);
			require_once 'view/header.php';
			require_once 'view/infocliente/editar.php';
			require_once 'view/footer.php';
		}
	}

	public function eliminar()
	{
		$this->infocliente->setAtributo('DNI',$_REQUEST['id']);
		$this->infocliente->eliminar();
		header('location:?c=infocliente&m=index');
	}

	public function ver()
	{
		$this->infocliente = $this->infocliente->buscar($_REQUEST['id']);
		require_once 'view/header.php';
		require_once 'view/infocliente/ver.php';
		require_once 'view/footer.php';
	}
}
?>