<?php 
require_once 'conexion.php';
class infogrupovehiculo extends Conexion
{
	private $CodGrupo;
	private $NombreGrupo;
	private $Tipo;
	private $TamanoVehiculo;
	private $EdadMinima;

	private $conexion;
	function __construct()
	{
		$this->conexion = new Conexion();
	}
	public function setAtributo($nombre, $valor)
	{
		$this->$nombre = ucfirst(strtolower($valor));//Cualquier data al introducir en Mayuscula sera convertido en minuscula
	}

	public function getAtributo($nombre)
	{
		return $this->$nombre;
	}

	public function buscar($CodGrupo)
	{
		$sql = "CALL SP_INFOGRUPOVEHICULOS_BUSCAR('".$CodGrupo."');";
		$result = $this->conexion->consultaRetorno($sql);
		$infogrupovehiculo = $this->convertToinfogrupovehiculo($result);
		return $infogrupovehiculo;
	}

	public function listar()
	{
		$sql = "CALL SP_INFOGRUPOVEHICULOS_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}

	public function guardar()
	{
		$sql = "CALL SP_INFOGRUPOVEHICULOS_GUARDAR('$this->CodGrupo','$this->NombreGrupo','$this->Tipo','$this->TamanoVehiculo','$this->EdadMinima');";
		$this->conexion->consultaSimple($sql);
	}

	public function actualizar()
	{
		$sql = "CALL SP_INFOGRUPOVEHICULOS_ACTUALIZAR('$this->CodGrupo','$this->NombreGrupo','$this->Tipo','$this->TamanoVehiculo','$this->EdadMinima');";
		$this->conexion->consultaSimple($sql);
	}

	public function eliminar()
	{
		$sql = "call SP_INFOGRUPOVEHICULOS_ELIMINAR('$this->CodGrupo')";
		$this->conexion->consultaSimple($sql);
	}

	public function convertToinfogrupovehiculo($result)
	{
		$infogrupovehiculo = new infogrupovehiculo();
		while ($row = mysqli_fetch_array($result)) {
			$infogrupovehiculo->setAtributo('CodGrupo',$row[0]);
			$infogrupovehiculo->setAtributo('NombreGrupo',$row[1]);
			$infogrupovehiculo->setAtributo('Tipo',$row[2]);
			$infogrupovehiculo->setAtributo('TamanoVehiculo',$row[3]);
			$infogrupovehiculo->setAtributo('EdadMinima',$row[4]);
		}
		return $infogrupovehiculo;
	}
}
 ?>