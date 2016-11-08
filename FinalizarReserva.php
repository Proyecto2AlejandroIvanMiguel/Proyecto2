<?php

		//realizamos la conexión
			$conexion = mysqli_connect('localhost', 'root','', 'bd_educayaprende');
			$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

			if (!$conexion) {
					echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
					echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
					exit;
			}
			$sin_nada = 0 ;
			extract($_REQUEST);

				$sql = "SELECT id_usuario, count(*) FROM tbl_reserva WHERE estado_reserva = '0' group by id_usuario
				";
				$reservas= mysqli_query($conexion, $sql);
				if(mysqli_num_rows($reservas)>0){
				
					$finalizar_status = 'unchecked';
					$continuar_status = 'unchecked';

					if (isset($_POST['Submit1'])) {

					$selected_radio = $_POST['finalizar'];

					if ($selected_radio = = 'finalizar') {

					$finalizar_status = 'checked';

					}
					else if ($selected_radio = = 'continuar') {

					$continuar_status = 'checked';

					}
				
				}

}
			}

    mysqli_close($conexion);
		?>
