<?php 
//incluir la conexion de base de datos
require "../config/Validation.php";
class Asistencia{


	//implementamos nuestro constructor
public function __construct(){

}


//listar registros
public function listar(){
	$sql="SELECT a.idasistencia,a.cod_persona,a.fecha_hora,a.tipo,a.fecha,u.nombre,u.apellidos,d.nombre as departamento FROM asistencia a INNER JOIN usuarios u INNER JOIN departamento d ON u.iddepartamento=d.iddepartamento WHERE a.cod_persona=u.cod_persona";
	return ejecutarConsulta($sql);
}

public function listaru($idusuario){
	$sql="SELECT a.idasistencia,a.cod_persona,a.fecha_hora,a.tipo,a.fecha,u.nombre,u.apellidos,d.nombre as departamento FROM asistencia a INNER JOIN usuarios u INNER JOIN departamento d ON u.iddepartamento=d.iddepartamento WHERE a.cod_persona=u.cod_persona AND u.idusuario='$idusuario'";
	return ejecutarConsulta($sql);
}

public function listar_asistencia($fecha_inicio,$fecha_fin,$cod_persona){
	$sql="SELECT a.idasistencia,a.cod_persona,a.fecha_hora,a.tipo,a.fecha,u.nombre,u.apellidos FROM asistencia a INNER JOIN usuarios u ON  a.cod_persona=u.cod_persona WHERE DATE(a.fecha)>='$fecha_inicio' AND DATE(a.fecha)<='$fecha_fin' AND a.cod_persona='$cod_persona'";
	return ejecutarConsulta($sql);
}


}

 ?>
