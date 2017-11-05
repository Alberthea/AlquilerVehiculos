<?php 
require_once 'conexion.php';
class infooficina extends Conexion
{
	private $CodOficina;
	private $NombreOfi;
	private $CiudadOfi;
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
	 	$sql = "CALL SP_INFOOFICINA_BUSCAR ('".$CodOficina."');";
	 	$result = $this->conexion->consultaRetorno($sql);
		$infooficina = $this->convertToinfooficina($result);
	 	return $infooficina;
	 }
	public function listar()
	{
		$sql = "CALL SP_INFOOFICINA_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}
	public function guardar()
	{
		$sql = "CALL SP_INFOOFICINA_GUARDAR('$this->CodOficina','$this->NombreOfi','$this->CiudadOfi','$this->Calle','$this->Numero','$this->CodPostal','$this->Telefono');";
		$this->conexion->consultaSimple($sql);
	}
	public function actualizar()
	{
		$sql = "CALL SP_INFOOFICINA_ACTUALIZAR('$this->CodOficina','$this->NombreOfi','$this->CiudadOfi','$this->Calle','$this->Numero','$this->CodPostal','$this->Telefono');";
		$this->conexion->consultaSimple($sql);
	}
	public function eliminar()
	{
		$sql = "CALL SP_INFOOFICINA_ELIMINAR('$this->CodOficina');";
		$this->conexion->consultaSimple($sql);
	}
	public function convertToinfooficina($result)
	{
		$infooficina = new infooficina();
		while ($row = mysqli_fetch_array($result)) {
			$oficinas->setAtributo('CodOficina',$row[0]);
			$oficinas->setAtributo('NombreOfi',$row[1]);
			$oficinas->setAtributo('CiudadOfi',$row[2]);
			$infooficina->setAtributo('Calle',$row[3]);
			$infooficina->setAtributo('Numero',$row[4]);
			$infooficina->setAtributo('CodPostal',$row[5]);
			$infooficina->setAtributo('Telefono',$row[6]);
		}
		return $infooficina;
	}
}
 ?>