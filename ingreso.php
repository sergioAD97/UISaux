<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Ingresar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/gif" href="images/icono.gif" />
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<?php 
include ("conexion.php"); 
?>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php
error_reporting(0); //no se reportan los notice
	if($_SESSION["usuario"] == "estudiante"){
		include_once 'phpUISaux/headerEstudiante.php';
		}else if ($_SESSION["usuario"] == "administrador") {
			include_once  'phpUISaux/headerAdministrador.php' ;
		}else if ($_SESSION["usuario"] == "administrativo") {
			include_once 'phpUISaux/headerAdministrativo.php' ;
		}else if ($_SESSION["usuario"] == "ejecutor") {
			include_once 'phpUISaux/headerEjecutor.php';
		}
		else{
			include_once 'phpUISaux/headerRegistrarse.php' ;

		}
	
?>
	<!-- Home -->



	


	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Registrate ahora para estar al día y recibir información sobre auxiliaturas.</h1>
							<p class="register_text">Al estar registrado puedes ver, postularte y estar al día acerca de todas las auxiliaturas presentes en nuestro sistema.</p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="registrar.html">Registrate ahora</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Ingrese</h1>
							

							<form id="search_form" class="search_form" action="validar.php" method="POST">   
								<input id="search_form_name" name="codigo" class="input_field search_form_name" type="text" placeholder="Codigo" required="required" data-error="Requiere Codigo.">
								<input id="search_form_category" name="psw" class="input_field search_form_category" type="password" placeholder="Contraseña" data-error="Requiere Contraseña.">
								<?php 
														       
															   if (isset($_GET["errorusuario"])=="si")
															   {
															 ?> 
															   <b><font color="red"> Datos incorrectos.</font></b> 
															 <?php
															   }
															   else
															   {
															 ?> 
															    <b><font color="green"> Ingrese el código y la contraseña</font></b> 
															 <?php 
															   }
															 ?>
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Ingresar</button>
							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->

	<?php

			include_once 'phpUISaux/footerRegistrar.php' ;

		
	
?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>