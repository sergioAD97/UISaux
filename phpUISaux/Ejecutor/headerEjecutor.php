<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="../images/logo.png" alt="">
					<span>UISaux</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="../index.php">Inicio</a></li>
						<li class="nav-item dropdown main_nav_item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Auxiliaturas</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="Ejecutor/confirmarAuxiliatura.php">Confirmar Auxiliaturas</a>
							<a class="dropdown-item" href="listarauxiliaturas.php">Listar Auxiliaturas</a>
						</li>
						<!--<li class="main_nav_item"><a href="elements.html">Elementos</a></li>-->
						<li class="main_nav_item"><a href="perfil.php">Perfil</a></li>
						<li class="main_nav_item"><a href="../cerrar_sesion.php">Salir</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
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
					<li class="menu_item menu_mm"><a href="../index.php">Inicio</a></li>
					<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Auxiliaturas</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="Ejecutor/confirmarAuxiliatura.php">Confirmar Auxiliaturas</a>
							<a class="dropdown-item" href="listarauxiliaturas.php">Listar Auxiliaturas</a>
						</li>
					<li class="menu_item menu_mm"><a href="perfil.php">Perfil</a></li>
					<li class="menu_item menu_mm"><a href="../cerrar_sesion.php">Salir</a></li>
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
	
