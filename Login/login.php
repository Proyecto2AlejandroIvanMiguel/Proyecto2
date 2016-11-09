<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>Log-in</title>
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
		$usuario=$_POST['user'];
		$password_usuario=$_POST['pass'];
		$sql = "SELECT usuario_usuario FROM tbl_usuario WHERE usuario_usuario = $usuario AND password_usuario = $password_usuario	";
		$usuarios= mysqli_query($conexion, $sql);
		if($usuarios==0){
			$usuario=$_POST['user'];
			header('Location: login.html');
		}
		else{
			header('Location: ../HTML/index.html');
		}
	mysqli_close($conexion);
		?>
</body>
</html>
