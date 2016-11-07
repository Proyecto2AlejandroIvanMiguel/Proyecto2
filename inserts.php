<?php

		//realizamos la conexión
		$conexion = mysqli_connect('localhost', 'root','', 'bd_educayaprende');
		$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

    //error de conexion
    if(!$conexion){
      echo "<script>";
      echo "alert('No se ha podido establecer comunicación con el servidor')";
      echo "</script>";
      return;
    }

		//igualaciones de variable
      //tbl_reserva
		$id_material = $_POST['material'];

		if(){

		}
				$nombre = $_POST['Nombre'];
				$apellido  = $_POST['Apellido'];
				$consulta = sprintf("SELECT nombre, apellido, direccion, edad FROM amigos
				    WHERE nombre='%s' AND apellido='%s'",
				    mysql_real_escape_string($nombre),
				    mysql_real_escape_string($apellido));
				$resultado = mysql_query($consulta);
    mysqli_close($conexion);

		?>
