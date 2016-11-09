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
			$sql = "SELECT * FROM tbl_reserva";
			$reservas= mysqli_query($conexion, $sql);
      if(mysqli_num_rows($reservas>0){
				echo "Número de reservas: " . mysqli_num_rows($reservas) . "<br/><br/>";
			while($reserva = mysqli_fetch_array($reservas)){
				echo "Id_reserva: " . $reserva['id_reserva'] . "<br/>";
				echo "Fecha inicio reserva: " . $reserva['fecha_reserva'] . "<br/>";
				echo "Fecha final reserva:" . $reserva['fechaF_reserva'] . "<br/>";
				echo "Nombre Matrial" . $reserva['nombre_material'] . "<br/>";
				echo "idusuario:" . $reserva['id_usuario'] . "<br/>";
				echo "Nombre Usuario: " . $reserva['nombre_usuario'] . "<br/>";
				echo "Estado reserva:";
				if ($reserva['fechaF_reserva'] == ""){
					echo "En Curso";
				} else {
					echo "Disponible";
				}
    mysqli_close($conexion);
		?>
