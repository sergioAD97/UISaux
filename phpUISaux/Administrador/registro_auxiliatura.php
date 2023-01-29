<?php session_start();
include ("../../conexion.php"); 
if(!empty($_POST))
{
	$alert='';
	if(empty($_POST['fecha_inicio']) || empty($_POST['Administrativo_creador']) || empty($_POST['estado']) || empty($_POST['texto']) || empty($_POST['auxiliar']) || empty($_POST['fecha_finalizacion']))
	{
		$alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
	}else{

		$idaux = $_POST['idaux'];
			$fecha_inicio = $_POST['fecha_inicio'];
			$Administrativo_creador  = $_POST['Administrativo_creador'];
			$estado   = $_POST['estado'];
			$texto   = $_POST['texto'];
			$auxiliar   = $_POST['auxiliar'];
			$fecha_finalizacion   = $_POST['fecha_finalizacion'];
			


		$query = mysqli_query($conn,"SELECT * FROM auxiliaturas WHERE  idaux = '$idaux' ");
		$result = mysqli_fetch_array($query);

		if($result > 0){
			$alert='<p class="msg_error">La auxiliatura ya existe.</p>';
		}else{

			$query_insert = mysqli_query($conn,"INSERT INTO auxiliaturas(fecha_inicio,Administrativo_creador,estado,texto,auxiliar,fecha_finalizacion)
																VALUES('$fecha_inicio','$Administrativo_creador','$estado','$texto','$auxiliar','$fecha_finalizacion')");
			if($query_insert){
				$alert='<p class="msg_save">Auxiliatura creado correctamente.</p>';
			}else{
				$alert='<p class="msg_error">Error al crear la auxiliatura.</p>';
			}

		}


	}

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Administrar-Usuario</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/gif" href="../../images/icono.gif" />
<link rel="stylesheet" type="text/css" href="../../styles/bootstrap4/bootstrap.min.css">
<link href="../../plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../../styles/main_styles.css">

<link rel="stylesheet" type="text/css" href="../../styles/responsive.css">
</head>
<body>

<div class="super_container">
<?php
	error_reporting(0); //no se reportan los notice
	?>
<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="../../images/logo.png" alt="">
					<span>UISaux</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="../../index.php">Inicio</a></li>
						<li class="nav-item dropdown main_nav_item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrar</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="Administrar.php">Gestionar Usuarios</a>
							<a class="dropdown-item" href="Administraraux.php">Gestionar Auxiliaturas</a>
							<a class="dropdown-item" href="Administrarpos.php">Gestionar Postulaciones</a>
						</li>
						<li class="main_nav_item"><a href="../listarauxiliaturas.php">Listar Auxiliaturas</a></li>
						<!--<li class="main_nav_item"><a href="elements.html">Elementos</a></li>-->
						<li class="main_nav_item"><a href="../perfil.php">Perfil</a></li>
						<li class="main_nav_item"><a href="../../cerrar_sesion.php">Salir</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="../../images/phone-call.svg" alt="">
			<span><a href=""> <strong><?php echo $_SESSION['nombre'];?></strong> </a></span>
			</br>
			<span><a href=""> <strong><?php echo $_SESSION['usuario'];?></strong> </a></span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="../../index.php">Inicio</a></li>
					<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrar</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="Administrar.php">Gestionar Usuarios</a>
							<a class="dropdown-item" href="Administraraux.php">Gestionar Auxiliaturas</a>
							<a class="dropdown-item" href="Administrarpos.php">Gestionar Postulaciones</a>
						</li>
						<li class="menu_item menu_mm"><a href="../listarauxiliaturas.php">Listar Auxiliaturas</a></li>
					<li class="menu_item menu_mm"><a href="../perfil.php">Perfil</a></li>
					<li class="menu_item menu_mm"><a href="../../cerrar_sesion.php">Salir</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	
	<!-- Register -->


		
							
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(../../images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<br><br><br><br><br><br><br><br><br><br>
                            <h1 class="search_title">Registro Auxiliatura</h1>
</div>
</div>
</div>

	
<div class="register">
		
			<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
			<form action="" method="post"  class="search_form">
				<label for="fecha_inicio">Fecha Inicio</label>
				<input type="date" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio" class="input_field search_form_category">
				<label for="Administrativo_creador">Administrativo Creador</label>
				<input type="text" name="Administrativo_creador" id="Administrativo_creador" placeholder="Administrativo creador" class="input_field search_form_category">
				<label for="estado">Estado</label>
				<input type="text" name="estado" id="estado" placeholder="Estado" class="input_field search_form_category">
				<label for="texto">Texto</label>
				<input type="text" name="texto" id="texto" placeholder="Texto" class="input_field search_form_category">
				<label for="auxiliar">Auxiliar</label>
				<input type="text" name="auxiliar" id="auxiliar" placeholder="Auxiliar" class="input_field search_form_category">
				<label for="fecha_finalizacion">Fecha Finalizacion</label>
				<input type="date" name="fecha_finalizacion" id="fecha_finalizacion" placeholder="Fecha Finalizacion" class="input_field search_form_category">
				
				
				<span><?php echo isset($alert) ? $alert : ''; ?></p>
				<a  id="search_submit_button" href="Administraraux.php" class="btn_cancel">Atras</a>
				<input type="submit"  name="enviar" value="Crear Auxiliatura"  class="btn_ok">

			</form>


		</div>

	<footer class="footer">
		<div class="container">
			
					

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
Adaptada por Grupo8 Ingenieria de software2 J1. UIS Bucaramanga-2020-1
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../styles/bootstrap4/popper.js"></script>
<script src="../../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../plugins/greensock/TweenMax.min.js"></script>
<script src="../../plugins/greensock/TimelineMax.min.js"></script>
<script src="../../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../../plugins/greensock/animation.gsap.min.js"></script>
<script src="../../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../../plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="../../plugins/easing/easing.js"></script>
<script src="../../js/custom.js"></script>

</body>
</html>