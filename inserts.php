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
			//http://php.net/
		if (!$enlace) {
    die('No se pudo conectar: ' . mysql_error());
		}
		if (!mysql_select_db('nombre_base_datos')) {
		    die('No se pudo seleccionar la base de datos: ' . mysql_error());
		}
		$resultado = mysql_query('SELECT name FROM work.employee');
		if (!$resultado) {
		    die('No se pudo consultar:' . mysql_error());
		}
		// FALTAN " php inset php update"
echo mysql_result($resultado, 2); // imprime el nombre del tercer empleado
		//igualaciones de variable
      //tbl_reserva
		$id_material = $_POST['material'];
			}
    mysqli_close($conexion);
		?>
