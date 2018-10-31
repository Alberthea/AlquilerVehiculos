<?php 
require_once 'conexion.php';
class seguros extends Conexion
{
	private $CodTipoSeguro;
	private $NombreSeguro;
	private $DescripcionSeguro;
	private $MontoSeguro;

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
	public function buscar($CodTipoSeguro)
	 {
	 	$sql = "call SP_SEGUROS_BUSCAR ('".$CodTipoSeguro."');";
	 	$result = $this->conexion->consultaRetorno($sql);
		$cliente = $this->convertToseguros($result);
	 	return $cliente;
	 }
	public function listar()
	{
		$sql = "CALL SP_SEGUROS_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}
	public function guardar()
	{
		$sql = "CALL SP_SEGUROS_GUARDAR('$this->CodTipoSeguro','$this->NombreSeguro','$this->DescripcionSeguro','$this->MontoSeguro');";
		$this->conexion->consultaSimple($sql);
	}
	public function actualizar()
	{
		$sql = "CALL SP_SEGUROS_ACTUALIZAR('$this->CodTipoSeguro','$this->NombreSeguro','$this->DescripcionSeguro','$this->MontoSeguro');";
		$this->conexion->consultaSimple($sql);
	}
	public function eliminar()
	{
		$sql = "CALL SP_SEGUROS_ELIMINAR('$this->CodTipoSeguro');";
		$this->conexion->consultaSimple($sql);
	}
	public function convertToseguros($result)
	{
		$seguros = new seguros();
		while ($row = mysqli_fetch_array($result)) {
			$seguros->setAtributo('CodTipoSeguro',$row[0]);
			$seguros->setAtributo('NombreSeguro',$row[1]);
			$seguros->setAtributo('DescripcionSeguro',$row[2]);
			$seguros->setAtributo('MontoSeguro',$row[3]);
		}
		return $seguros;
	}
}
 ?>