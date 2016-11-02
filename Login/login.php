<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>

		<?php
			//función que extrae el contenido de un array ($_REQUEST["nombre"], $_REQUEST["contrasenya"]...) en variables con el mismo nombre que tienen en origen $nombre, $contrasenya...
			extract($_REQUEST);

			echo "Nombre de usuario: $nombre<br/>";

			echo "Contraseña: $contrasenya<br/>";

		?>

		<a href="index.html">Volver</a>
	</body>
</html>