<?php 
require_once 'conexion.php';
class infocliente extends Conexion
{
	private $DNI;
	private $NombreConductor;
	private $Apellido1;
	private $Apellido2;
	private $Edad;
	private $Direccion;
	private $Telefono;
	private $NumTarjeta;

	private $conexion;
	function __construct()
	{
		$this->conexion = new Conexion();
	}
	public function setAtributo($nombre, $valor)
	{
		$this->$nombre = ucfirst(strtolower($valor)); 
	}
	public function getAtributo($nombre)
	{
		return $this->$nombre;
	}
	public function buscar($DNI)
	 {
	 	$sql = "CALL SP_CLIENTE_BUSCAR ('".$DNI."');";
	 	$result = $this->conexion->consultaRetorno($sql);
		$infocliente = $this->convertToinfocliente($result);
	 	return $infocliente;
	 }
	public function listar()
	{
		$sql = "CALL SP_CLIENTE_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}
	public function guardar()
	{
		$sql = "CALL SP_CLIENTE_GUARDAR('$this->DNI','$this->NombreConductor','$this->Apellido1','$this->Apellido2','$this->Edad','$this->Direccion','$this->Telefono','$this->NumTarjeta');";
		$this->conexion->consultaSimple($sql);
	}
	public function actualizar()
	{
		$sql = "CALL SP_CLIENTE_ACTUALIZAR('$this->DNI','$this->NombreConductor','$this->Apellido1','$this->Apellido2','$this->Edad','$this->Direccion','$this->Telefono','$this->NumTarjeta');";
		$this->conexion->consultaSimple($sql);
	}
	public function eliminar()
	{
		$sql = "CALL SP_CLIENTE_ELIMINAR('$this->DNI');";
		$this->conexion->consultaSimple($sql);
	}
	public function convertToinfocliente($result)
	{
		$infocliente = new infocliente();
		while ($row = mysqli_fetch_array($result)) {
			$infocliente->setAtributo('DNI',$row[0]);
			$infocliente->setAtributo('NombreConductor',$row[1]);
			$infocliente->setAtributo('Apellido1',$row[2]);
			$infocliente->setAtributo('Apellido2',$row[3]);
			$infocliente->setAtributo('Edad',$row[4]);
			$infocliente->setAtributo('Direccion',$row[5]);
			$infocliente->setAtributo('Telefono',$row[6]);
			$infocliente->setAtributo('NumTarjeta',$row[7]);
		}
		return $infocliente;
	}
}
 ?>