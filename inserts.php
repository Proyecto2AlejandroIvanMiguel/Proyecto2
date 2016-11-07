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

        //definir condiciones

				// Lo siguiente podría ser proporcionado por un usuario, como por ejemplo
				$nombre = 'fred';
				$apellido  = 'fox';

				// Formular la consulta
				// Este es el mejor método para formular una consulta SQL
				// Para más ejemplos, consulte mysql_real_escape_string()
				$consulta = sprintf("SELECT nombre, apellido, direccion, edad FROM amigos
				    WHERE nombre='%s' AND apellido='%s'",
				    mysql_real_escape_string($nombre),
				    mysql_real_escape_string($apellido));

				// Ejecutar la consulta
				$resultado = mysql_query($consulta);

				// Comprobar el resultado
				// Lo siguiente muestra la consulta real enviada a MySQL, y el error ocurrido. Útil para depuración.
				

    mysqli_close($conexion);

		?>
