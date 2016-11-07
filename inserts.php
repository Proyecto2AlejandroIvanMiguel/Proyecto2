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
				if (!$resultado) {
				    $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
				    $mensaje .= 'Consulta completa: ' . $consulta;
				    die($mensaje);
				}

				// Usar el resultado
				// Si se intenta imprimir $resultado no será posible acceder a la información del recurso
				// Se debe usar una de las funciones de resultados de mysql
				// Consulte también mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.
				while ($fila = mysql_fetch_assoc($resultado)) {
				    echo $fila['nombre'];
				    echo $fila['apellido'];
				    echo $fila['direccion'];d
				    echo $fila['edad'];
				}

				// Liberar los recursos asociados con el conjunto de resultados
				// Esto se ejecutado automáticamente al finalizar el script.
				mysql_free_result($resultado);

    mysqli_close($conexion);

		?>
