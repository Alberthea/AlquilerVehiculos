<?php 
require_once 'conexion.php';
class vehiculos  extends Conexion
{
	private $Matricula;
	private $CodGrupo;
	private $Marca;
	private $Modelo;
	private $conexion;
	function __construct()
	{
		$this->conexion = new Conexion();
	}
	public function setAtributo($Marca, $valor)
	{
		$this->$Marca = ucfirst(strtolower($valor)); 
	}
	public function getAtributo($Marca)
	{
		return $this->$Marca;
	}
	public function buscar($Matricula)
	 {
	 	$sql = "call SP_VEHICULOS_BUSCAR ('".$Matricula."');";
	 	$result = $this->conexion->consultaRetorno($sql);
		$cliente = $this->convertTovehiculos($result);
	 	return $cliente;
	 }
	public function listar()
	{
		$sql = "CALL SP_VEHICULOS_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}
	public function guardar()
	{
		$sql = "CALL SP_VEHICULOS_GUARDAR('$this->Matricula','$this->CodGrupo','$this->Marca','$this->Modelo');";
		$this->conexion->consultaSimple($sql);
	}
	public function actualizar()
	{
		$sql = "CALL SP_VEHICULOS_ACTUALIZAR('$this->Matricula','$this->CodGrupo','$this->Marca','$this->Modelo');";
		$this->conexion->consultaSimple($sql);
	}
	public function eliminar()
	{
		$sql = "CALL SP_VEHICULOS_ELIMINAR('$this->Matricula');";
		$this->conexion->consultaSimple($sql);
	}
	public function convertTovehiculos($result)
	{
		$vehiculos = new vehiculos();
		while ($row = mysqli_fetch_array($result)) {
			$vehiculos->setAtributo('Matricula',$row[0]);
			$vehiculos->setAtributo('CodGrupo',$row[1]);
			$vehiculos->setAtributo('Marca',$row[2]);
			$vehiculos->setAtributo('Modelo',$row[3]);
		}
		return $vehiculos;
	}
}
 ?>