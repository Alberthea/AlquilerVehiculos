<?php 
require_once 'conexion.php';
class grupovehiculos  extends Conexion
{
	private $CodGrupo;
	private $NombreGrupo;
    private $Tipo;
	private $TamanoVehiculo;
	private $CantPuertas;
	private $CantAsientos;
	private $CapacidadMaletero;
	private $EdadMinima;
	private $conexion;
	
	function __construct()
	{
		$this->conexion = new Conexion();
	}
	//Manda un atributo convertido en minuscula, o ya sea solamente el primer caracter
	public function setAtributo($NombreGrupo, $valor)
	{
		$this->$NombreGrupo = ucfirst(strtolower($valor));//Cualquier data al introducir en Mayuscula sera convertido en minuscula
	}

	public function getAtributo($NombreGrupo)
	{
		return $this->$NombreGrupo;
	}

	public function buscar($CodGrupo)
	{
		$sql = "CALL SP_GRUPOVEHICULOS_BUSCAR('".$CodGrupo."');";
		$result = $this->conexion->consultaRetorno($sql);
		$grupovehiculos = $this->convertTogrupovehiculos($result);
		return $grupovehiculos;
	}

	public function listar()
	{
		$sql = "CALL SP_GRUPOVEHICULOS_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}

	public function guardar()
	{
		$sql = "CALL SP_GRUPOVEHICULOS_GUARDAR('$this->CodGrupo','$this->NombreGrupo','$this->Tipo','$this->TamanoVehiculo','$this->CantPuertas','$this->CantAsientos','$this->CapacidadMaletero','$this->EdadMinima');";
		$this->conexion->consultaSimple($sql);
	}

	public function actualizar()
	{
		$sql = "CALL SP_GRUPOVEHICULOS_ACTUALIZAR('$this->CodGrupo','$this->NombreGrupo','$this->Tipo','$this->TamanoVehiculo','$this->CantPuertas','$this->CantAsientos','$this->CapacidadMaletero','$this->EdadMinima');";
		$this->conexion->consultaSimple($sql);
	}

	public function eliminar()
	{
		$sql = "call SP_GRUPOVEHICULOS_ELIMINAR('$this->CodGrupo')";
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
			$grupovehiculos->setAtributo('CantPuertas',$row[4]);
			$grupovehiculos->setAtributo('CantAsientos',$row[5]);
			$grupovehiculos->setAtributo('CapacidadMaletero',$row[6]);
			$grupovehiculos->setAtributo('EdadMinima',$row[7]);
		}
		return $grupovehiculos;
	}
}
 ?>