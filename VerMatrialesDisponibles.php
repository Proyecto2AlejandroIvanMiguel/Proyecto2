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

				$sql = "SELECT     tbl_material.nombre_material, tbl_reserva.estado_reserva AS Disponibilidad FROM		tbl_material INNER JOIN	tbl_reserva ON tbl_material.id_material = tbl_reserva.id_material GROUP BY	tbl_material.nombre_material, tbl_reserva.estado_reserva ORDER BY 	tbl_material.id_material,  tbl_reserva.estado_reserva, Disponibilidad";
				$reservas= mysqli_query($conexion, $sql);
				if(mysqli_num_rows($reservas)>0){
					echo "Número de reservas: " . mysqli_num_rows($reservas) . "<br/><br/>";
					if ( $reserva['estado_reserva']== 1) {
						while($reserva = mysqli_fetch_array($reservas)){
							echo "Material: " . $reserva['nombre_material'] . "<br/>";
							echo "estado_reserva: " . $reserva['estado_reserva'] . "<br/>";
						}
					}
					else {
					 	$sin_nada += 1;
					}
				}

			}
			else{
				//COMPROBAR QUE LOS DATOS DE LA BD NO ESTAN SIN
				echo "<script language='javascript'>alert('NO SE HA RELLENADO NINGUNA CAMPO DEL FORMULARIO.');</script>";
				echo "<h1 style='text-align:center;'> Todas las Bicis Encontradas </h1> <br/>";
				$sql = "SELECT * FROM tbl_material ";
				$materiales = mysqli_query($conexion, $sql);
				if(mysqli_num_rows($materiales)>0){
					echo "Número de reservas: " . mysqli_num_rows($reservas) . "<br/><br/>";
					while($material = mysqli_fetch_array($materiales)){
						echo "Nombre: " . $material['nombre_matrial'] . "<br/>";
					}
				}
				else {
					echo "No hay datos que mostrar!";
				}
			}

    mysqli_close($conexion);
		?>
