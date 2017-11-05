<?php 
class infovehiculo extends Conexion
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
		$grupovehiculos = $this->convertTogrupovehiculos($result);
		return $grupovehiculos;
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

	public function convertTogrupovehiculos($result)
	{
		$grupovehiculos = new grupovehiculos();
		while ($row = mysqli_fetch_array($result)) {
			$grupovehiculos->setAtributo('CodGrupo',$row[0]);
			$grupovehiculos->setAtributo('NombreGrupo',$row[1]);
			$grupovehiculos->setAtributo('Tipo',$row[2]);
			$grupovehiculos->setAtributo('TamanoVehiculo',$row[3]);
			$grupovehiculos->setAtributo('EdadMinima',$row[4]);
		}
		return $grupovehiculos;
	}
}
 ?>