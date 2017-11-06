<?php 
require_once 'conexion.php';
class infovehiculo  extends Conexion
{
	private $Matricula;
	private $CodGrupo;
	private $Marca;
	private $Modelo;
	private $NPuertas;
	private $NAsientos;
	private $CapMaletero;
	private $EstadoVehiculo;

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
	public function buscar($Matricula)
	 {
	 	$sql = "call SP_VEHICULOS_BUSCAR ('".$Matricula."');";
	 	$result = $this->conexion->consultaRetorno($sql);
		$cliente = $this->convertToinfovehiculo($result);
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
		$sql = "CALL SP_VEHICULOS_GUARDAR('$this->Matricula','$this->CodGrupo','$this->Marca','$this->Modelo','$this->NPuertas','$this->NAsientos','$this->CapMaletero','$this->EstadoVehiculo');";
		$this->conexion->consultaSimple($sql);
	}
	public function actualizar()
	{
		$sql = "CALL SP_VEHICULOS_ACTUALIZAR('$this->Matricula','$this->CodGrupo','$this->Marca','$this->Modelo','$this->NPuertas','$this->NAsientos','$this->CapMaletero','$this->EstadoVehiculo');";
		$this->conexion->consultaSimple($sql);
	}
	public function eliminar()
	{
		$sql = "CALL SP_VEHICULOS_ELIMINAR('$this->Matricula');";
		$this->conexion->consultaSimple($sql);
	}
	public function convertToinfovehiculo($result)
	{
		$infovehiculo = new infovehiculo();
		while ($row = mysqli_fetch_array($result)) {
			$infovehiculo->setAtributo('Matricula',$row[0]);
			$infovehiculo->setAtributo('CodGrupo',$row[1]);
			$infovehiculo->setAtributo('Marca',$row[2]);
			$infovehiculo->setAtributo('Modelo',$row[3]);
			$infovehiculo->setAtributo('NPuertas',$row[4]);
			$infovehiculo->setAtributo('NAsientos',$row[5]);
			$infovehiculo->setAtributo('CapMaletero',$row[6]);
			$infovehiculo->setAtributo('EstadoVehiculo',$row[7]);
		}
		return $infovehiculo;
	}
}
 ?>