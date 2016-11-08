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
      $hoy = date("Y-m-d H:i:s");
      $material=$_POST['materiales'];
      $sql = "INSERT INTO bd_educayaprende.tbl_reserva (fecha_reserva, fechaF_reserva, estado_reserva) VALUES ($hoy , NULL, '0');"
      $sql= mysqli_query($conexion, $sql);
      echo "Se ha efectuado su reserva";
    mysqli_close($conexion);
		?>
