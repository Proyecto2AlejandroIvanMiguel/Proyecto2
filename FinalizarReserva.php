<!--
CoAuthor: Alejandro
CoAuthor: Ivan
CoAuthor: Miguel
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Educa y Aprende | Home </title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function () {
              $('#horizontalTab').easyResponsiveTabs({
                  type: 'default', //Types: default, vertical, accordion
                  width: 'auto', //auto or any width like 600px
                  fit: true   // 100% fit in a container
              });
          });
         </script>
</head>
<body>
   <!--- start-header---->
  <div class="wrapper">
    <!--start-header---->
     <div class="header">
         <div class="container header_top">
        <div class="logo" style="width: 50%;">
          <a href="index.html"><img src="images/logo.png" style="width:70%;" alt=""></a>
        </div>
          <div class="menu">

          <ul class="nav" id="nav">
              <li class="current"><a href="index.html">Inicio</a></li>
            <li><a href="reservas.html">Reservas</a></li>
            <li><a href="historial.html">Historial</a></li>
            <li><a href="incidencias.html">Incidencias</a></li>
            <li><a href="finalizarReserva.html">Sobre Nosotros</a></li>
            <div class="clearfix"></div>
          </ul>
          <script type="text/javascript" src="js/responsive-nav.js"></script>
        </div>
          <div class="clearfix"> </div>
          <!--//End-top-nav---->
       </div>
    </div>
  <!--- //End-header---->

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



   <div class="main">
    <div class='container content_top'>
      <div class='row'>
        <div class="col-md-4 flag_grid">
        </div>
      </div>
    </div>
    <div class='container content_middle'>
      <div class="row">
        <div class="col-md-8 middle_left">
        </div>
        <div class="col-md-4">


                <div class="clear"></div>
              </ul>

                   </div>

 </div>
</body>
</html>
