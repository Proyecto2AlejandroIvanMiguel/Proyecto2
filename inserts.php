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
		

        //definir condiciones



    mysqli_close($conexion);

		?>
