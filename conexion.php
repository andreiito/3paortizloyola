<?php
//Permite establecer conexion al manejador de bases de datos:

function consulta($consulta){
	$con = pg_connect("host=127.0.0.1 port=5432 dbname=dbregistro user=registro_user password=holamundo") or die("No se puede establecer conexion a la BD");
	$query = pg_query($con,$consulta);
	$resp = pg_fetch_all($query);
	return $resp;
}
function edit($ed){
		$con = pg_connect("host=127.0.0.1 port=5432 dbname=dbregistro user=registrouser password=holamundo") or die("No se puede establecer conexion a la BD");
		$query = pg_query($con,$ed);
		return $query;
	}	
?>
