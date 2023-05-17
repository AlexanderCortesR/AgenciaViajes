<?php
	include ('conexion.php');
	
	if(!$conn){
		echo"Error en la conexion con el servidor";
	}

	$consulta = "SELECT * FROM destino";
	$ejecutarConsulta = mysqli_query($conn, $consulta);

	while($fila = mysqli_fetch_array($ejecutarConsulta)){
		echo"<option value='".$fila['codigoDestino']."'>".$fila['nombreDestino']."</option>";
	}

	mysqli_close($conn);
?>