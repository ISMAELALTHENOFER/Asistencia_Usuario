<?php
//incluir la conexion de base de datos
require "../config/Validation.php";
class Asistencia
{


	//implementamos nuestro constructor
	public function __construct()
	{
	}



	public function verificarcodigo_persona($cod_persona)
	{
		$sql = "SELECT * FROM usuarios WHERE cod_persona='$cod_persona'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function seleccionarcodigo_persona($cod_persona)
	{
		$sql = "SELECT * FROM asistencia WHERE cod_persona = '$cod_persona'";
		return ejecutarConsulta($sql);
	}

	public function registrar_entrada($cod_persona, $tipo)
	{
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$fecha = date("Y-m-d");
		$hora = date("H:i:s");
		$sql = "INSERT INTO asistencia (cod_persona,  tipo, fecha) VALUES ('$cod_persona', '$tipo', '$fecha')";
		return ejecutarConsulta($sql);
	}

	public function registrar_salida($cod_persona, $tipo)
	{
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$fecha = date("Y-m-d");
		$hora = date("H:i:s");
		$sql = "INSERT INTO asistencia (cod_persona,  tipo, fecha) VALUES ('$cod_persona', '$tipo', '$fecha')";
		return ejecutarConsulta($sql);
	}



	//listar registros
	public function listar()
	{
		$sql = "SELECT * FROM asistencia";
		return ejecutarConsulta($sql);
	}
}
