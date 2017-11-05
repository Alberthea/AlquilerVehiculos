<?php 
require_once 'conexion.php';
class alquiler extends Conexion
{
	private $CodAlquiler;
	private $DNI;
	private $DuracionDiasAlquiler;
	private $CodTipoSeguro;
	private $Matricula;
	private $PrecioTotal;

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
	public function buscar($CodAlquiler)
	 {
	 	$sql = "call SP_ALQUILERES_BUSCAR ('".$CodAlquiler."');";
	 	$result = $this->conexion->consultaRetorno($sql);
		$alquiler = $this->convertToalquiler($result);
	 	return $alquiler;
	 }
	public function listar()
	{
		$sql = "CALL SP_ALQUILERES_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}
	public function guardar()
	{
		$sql = "CALL SP_ALQUILERES_GUARDAR('$this->CodAlquiler','$this->DNI','$this->DuracionDiasAlquiler','$this->CodTipoSeguro','$this->Matricula','$this->PrecioTotal');";
		$this->conexion->consultaSimple($sql);
	}
	public function actualizar()
	{
		$sql = "CALL SP_ALQUILERES_ACTUALIZAR('$this->CodAlquiler','$this->DNI','$this->DuracionDiasAlquiler','$this->CodTipoSeguro','$this->Matricula','$this->PrecioTotal');";
		$this->conexion->consultaSimple($sql);
	}
	public function eliminar()
	{
		$sql = "CALL SP_ALQUILERES_ELIMINAR('$this->CodAlquiler');";
		$this->conexion->consultaSimple($sql);
	}
	public function convertToalquiler($result)
	{
		$alquiler = new alquiler();
		while ($row = mysqli_fetch_array($result)) {
			$alquiler->setAtributo('CodAlquiler',$row[0]);
			$alquiler->setAtributo('DNI',$row[1]);
			$alquiler->setAtributo('DuracionDiasAlquiler',$row[2]);
			$alquiler->setAtributo('CodTipoSeguro',$row[3]);
			$alquiler->setAtributo('Matricula',$row[4]);
		}
		return $alquiler;
	}
}
 ?>