<?php
	include ('conexion.php');
	
	if(!$conn){
		echo"Error en la conexion con el servidor";
	}

	$consulta = "SELECT * FROM hotel";
	$ejecutarConsulta = mysqli_query($conn, $consulta);
	
	echo'<select name="hotel" id="select" class="col-4 form-control">';
	while($fila=mysqli_fetch_array($ejecutarConsulta)){
		if($fila['numCiudad']==$_GET['c']){
				echo "<option value='".$fila['numCiudad']."'>".$fila['nombreHotel']."</option>";
			}
		}
	echo'</select>';
?>