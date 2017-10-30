<?php 
require_once 'conexion.php';
class oficinas extends Conexion
{
	private $CodOficina;
	private $NombreOfi;
	private $CiudadOfi;

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
	 	$sql = "CALL SP_OFICINAS_BUSCAR ('".$CodOficina."');";
	 	$result = $this->conexion->consultaRetorno($sql);
		$oficinas = $this->convertTooficinas($result);
	 	return $oficinas;
	 }
	public function listar()
	{
		$sql = "CALL SP_OFICINAS_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}
	public function guardar()
	{
		$sql = "CALL SP_OFICINAS_GUARDAR('$this->CodOficina','$this->NombreOfi','$this->CiudadOfi');";
		$this->conexion->consultaSimple($sql);
	}
	public function actualizar()
	{
		$sql = "CALL SP_OFICINAS_ACTUALIZAR('$this->CodOficina','$this->NombreOfi','$this->CiudadOfi');";
		$this->conexion->consultaSimple($sql);
	}
	public function eliminar()
	{
		$sql = "CALL SP_OFICINAS_ELIMINAR('$this->CodOficina');";
		$this->conexion->consultaSimple($sql);
	}
	public function convertTooficinas($result)
	{
		$oficinas = new oficinas();
		while ($row = mysqli_fetch_array($result)) {
			$oficinas->setAtributo('CodOficina',$row[0]);
			$oficinas->setAtributo('NombreOfi',$row[1]);
			$oficinas->setAtributo('CiudadOfi',$row[2]);
		}
		return $oficinas;
	}
}
 ?>