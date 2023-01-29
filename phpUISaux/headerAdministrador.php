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
						<li class="main_nav_item"><a href="index.php">Inicio</a></li>
						<li class="nav-item dropdown main_nav_item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrar</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="phpUISaux/Administrador/Administrar.php">Gestionar Usuarios</a>
							<a class="dropdown-item" href="phpUISaux/Administrador/Administraraux.php">Gestionar Auxiliaturas</a>
							<a class="dropdown-item" href="phpUISaux/Administrador/Administrarpos.php">Gestionar Postulaciones</a>
						</li>
						<li class="main_nav_item"><a href="phpUISaux/listarauxiliaturas.php">Listar Auxiliaturas</a></li>
						<!--<li class="main_nav_item"><a href="elements.html">Elementos</a></li>-->
						<li class="main_nav_item"><a href="phpUISaux/perfil.php">Perfil</a></li>
						<li class="main_nav_item"><a href="cerrar_sesion.php">Salir</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span><a href="">Bienvenido <strong><?php echo $_SESSION['nombre'];?></strong> </a></span>
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
					<li class="menu_item menu_mm"><a href="index.php">Inicio</a></li>
					<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrar</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="phpUISaux/Administrador/Administrar.php">Gestionar Usuarios</a>
							<a class="dropdown-item" href="phpUISaux/Administrador/Administraraux.php">Gestionar Auxiliaturas</a>
							<a class="dropdown-item" href="phpUISaux/Administrador/Administrarpos.php">Gestionar Postulaciones</a>
						</li>
					<li class="menu_item menu_mm"><a href="phpUISaux/listarauxiliaturas.php">Listar Auxiliaturas</a></li>
					<!--<li class="menu_item menu_mm"><a href="elements.html">Elementos</a></li>-->
					<li class="menu_item menu_mm"><a href="phpUISaux/perfil.php">Perfil</a></li>
					<li class="menu_item menu_mm"><a href="cerrar_sesion.php">Salir</a></li>
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
	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<!--<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/uis.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Educacion</span> today!</h1>
						</div>
					</div>
				</div>-->
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/uis2.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Nuestras <span>Auxiliaturas</span></h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/uis3.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Conoce <span>Nuestra gente</span></h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">atras</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">siguiente</span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Auxiliaturas online</h2>
								<a href="phpUISaux/listarauxiliaturas.php" class="hero_box_link">ver mas</a>
							</div>
						</div>
					</div>

				

				</div>
			</div>
		</div>
	</div>