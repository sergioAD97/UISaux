<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Buscar-Usuario</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/gif" href="../../images/icono.gif" />
<link rel="stylesheet" type="text/css" href="../../styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../styles/bootstrap4/bootstrap.min.css">
<link href="../../plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../../styles/main_styles.css">

<link rel="stylesheet" type="text/css" href="../../styles/responsive.css">
</head>
<body>
<?php 
include ("../../conexion.php"); 
?>
<div class="super_container">
<?php
	error_reporting(0); //no se reportan los notice
	?>
<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
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
                            <h1 class="search_title">Lista de usuarios</h1>
</div>
</div>
</div>

<?php 

			$busqueda = strtolower($_REQUEST['busqueda']);
			if(empty($busqueda))
			{
				header("location: Administrar.php");
				mysqli_close($conn);
			}


		 ?>
		
	
		<a href="registro_usuario.php" class="btn_new">Crear usuario</a>
		
		<form action="buscar_usuario.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
			<input type="submit" value="Buscar" class="btn_search">
		</form>

		<table>
			<tr>
			    <th>Codigo</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Clave</th>
				<th>Usuario</th>
				<th>Acciones</th>
			</tr>
		<?php 
			//Paginador
			$usuario = '';
			if($busqueda == 'administrador')
			{
				$usuario = " OR rol LIKE '%1%' ";

			}else if($busqueda == 'administrativo'){

				$usuario = " OR rol LIKE '%2%' ";

			}else if($busqueda == 'estudiante'){

				$usuario = " OR rol LIKE '%3%' ";
			}else if($busqueda == 'ejecutor'){

				$usuario = " OR rol LIKE '%3%' ";
			}


			$sql_registe = mysqli_query($conn,"SELECT COUNT(*) as total_registro FROM usuario 
																WHERE ( codigo LIKE '%$busqueda%' OR 
																		nombre LIKE '%$busqueda%' OR 
																		apellido LIKE '%$busqueda%' OR 
																		usuario LIKE '%$busqueda%' 
																		$usuario  )  ");

			$result_register = mysqli_fetch_array($sql_registe);
			$total_registro = $result_register['total_registro'];

			$por_pagina = 5;

			if(empty($_GET['pagina']))
			{
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
			$total_paginas = ceil($total_registro / $por_pagina);

			$query = mysqli_query($conn,"SELECT u.codigo, u.nombre, u.apellido, u.usuario FROM usuarios u 
										WHERE 
										( u.codigo LIKE '%$busqueda%' OR 
											u.nombre LIKE '%$busqueda%' OR 
											u.apellido LIKE '%$busqueda%' OR 
											u.usuario LIKE '%$busqueda%' ) 
										 ORDER BY u.codigo ASC LIMIT $desde,$por_pagina 
				");
			mysqli_close($conn);
			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)) {
					
			?>
				<tr>
					<td><?php echo $data["codigo"]; ?></td>
					<td><?php echo $data["nombre"]; ?></td>
					<td><?php echo $data["apellido"]; ?></td>
					<td><?php echo $data["usuario"]; ?></td>
					<td>
						<a class="link_edit" href="editar_usuario.php?id=<?php echo $data["codigo"]; ?>">Editar</a>

					<?php if($data["idusuario"] != 1){ ?>
						|
						<a class="link_delete" href="eliminar_confirmar_usuario.php?id=<?php echo $data["codigo"]; ?>">Eliminar</a>
					<?php } ?>
						
					</td>
				</tr>
			
		<?php 
				}

			}
		 ?>


		</table>
<?php 
	
	if($total_registro != 0)
	{
 ?>
		<div class="paginador">
			<ul>
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>&busqueda=<?php echo $busqueda; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>&busqueda=<?php echo $busqueda; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'&busqueda='.$busqueda.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>&busqueda=<?php echo $busqueda; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?>&busqueda=<?php echo $busqueda; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
<?php } ?>



	<!-- Footer -->

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