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
		$id_reserva = $_POST[''];
		$fecha_reserva = $_POST[''];
		$fechaF_reserva = $_POST[''];
    $estado_reserva = $_POST[''];
      //tbl_usuario
    $id_usuario = $_POST[''];
    $usuario_usuario = $_POST['user'];
    $password_usuario = $_POST['pass'];
    $nombre_usuario = $_POST[''];
    $apellidos_usuario = $_POST[''];
    $tipo_usuario = $_POST[''];
      //tbl_material
    $id_material = $_POST[''];
    $nombre_material = $_POST[''];
    $tipo_material = $_POST[''];
      //tbl_incidencia
    $id_incidencia = $_POST[''];
    $tipo_incidencia = $_POST[''];
    $comentario_incidencia = $_POST[''];
    $estado_incidencia = $_POST[''];
      //login
    $btn_login = $_POST['login'];
    $btn_reservar = $_POST['reservar'];
          //definir condiciones
    if ($usuario_usuario == "" && $password_usuario == "") {
        alert('Porfavor , para reservar haz login antes .')
    }
    else{
      
    }

    mysqli_close($conexion);

		?>
