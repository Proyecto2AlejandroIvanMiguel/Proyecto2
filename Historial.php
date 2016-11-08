<?php

		//realizamos la conexión
			$conexion = mysqli_connect('localhost', 'root','', 'bd_bicis');
			$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

			if (!$conexion) {
					echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
					echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
					exit;
			}
			$sin_nada = 0 ;
			extract($_REQUEST);
			$sql = "SELECT nombre_usuario, nombre_material, fecha_reserva, fechaF_reserva, estado_reserva FROM tbl_reserva
			INNER JOIN tbl_usuario
			ON tbl_reserva.id_usuario = tbl_usuario.id_usuario
			INNER JOIN tbl_material
			ON tbl_reserva.id_material = tbl_material.id_material";
			$reservas= mysqli_query($conexion, $sql);
      if(mysqli_num_rows($reservas>0){
				while($reserva = mysqli_fetch_array($reservas)){
				echo "Nombre Usuario: " . $reserva['nombre_usuario'] . "<br/>";
				echo "Nombre Material" . $reserva['nombre_material'] . "<br/>";
				echo "Fecha inicio reserva: " . $reserva['fecha_reserva'] . "<br/>";
				echo "Fecha final reserva:" . $reserva['fechaF_reserva'] . "<br/>";
				echo "Nombre Material" . $reserva['nombre_material'] . "<br/>";			
				echo "Estado reserva:";
				if ($reserva['fechaF_reserva'] == ""){
					echo "En Curso";
				} else {
					echo "Disponible";
				}
    mysqli_close($conexion);
		?>
