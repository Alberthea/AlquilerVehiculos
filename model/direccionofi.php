<?php 
require_once 'conexion.php';
class direccionofi extends Conexion
{
	private $CodOficina;
	private $Calle;
	private $Numero;
	private $CodPostal;
	private $Telefono;

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
	public function buscar($CodOficina)
	 {
	 	$sql = "CALL SP_DIRECCIONESOFI_BUSCAR ('".$CodOficina."');";
	 	$result = $this->conexion->consultaRetorno($sql);
		$direccionofi = $this->convertTodireccionofi($result);
	 	return $direccionofi;
	 }
	public function listar()
	{
		$sql = "CALL SP_DIRECCIONESOFI_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}
	public function guardar()
	{
		$sql = "CALL SP_DIRECCIONESOFI_GUARDAR('$this->CodOficina','$this->Calle','$this->Numero','$this->CodPostal','$this->Telefono');";
		$this->conexion->consultaSimple($sql);
	}
	public function actualizar()
	{
		$sql = "CALL SP_DIRECCIONESOFI_ACTUALIZAR('$this->CodOficina','$this->Calle','$this->Numero','$this->CodPostal','$this->Telefono');";
		$this->conexion->consultaSimple($sql);
	}
	public function eliminar()
	{
		$sql = "CALL SP_DIRECCIONESOFI_ELIMINAR('$this->CodOficina');";
		$this->conexion->consultaSimple($sql);
	}
	public function convertTodireccionofi($result)
	{
		$direccionofi = new direccionofi();
		while ($row = mysqli_fetch_array($result)) {
			$direccionofi->setAtributo('CodOficina',$row[0]);
			$direccionofi->setAtributo('Calle',$row[1]);
			$direccionofi->setAtributo('Numero',$row[2]);
			$direccionofi->setAtributo('CodPostal',$row[3]);
			$direccionofi->setAtributo('Telefono',$row[4]);
		}
		return $direccionofi;
	}
}
 ?>