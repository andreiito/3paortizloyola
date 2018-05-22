<?php
include_once("conexion.php");
$sql = "select * from registro;";
$query = edit($sql);
	while ($row= pg_fetch_row($query)) {
		echo "<p> Nombre: ".$row[1]."</p>";
		echo "<p> Apellido paterno: ".$row[4]."</p>";
		echo "<p> apellido materno: ".$row[5]."</p>";
		echo "<p> Correo: ".$row[2]."</p>";
		echo "<p> Telefono: ".$row[3]."</p>";
		echo "<br/></br>"
		}


?>