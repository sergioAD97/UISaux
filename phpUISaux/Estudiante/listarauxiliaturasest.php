<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Listar Auxiliaturas</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/gif" href="../../images/icono.gif" />
<link rel="stylesheet" type="text/css" href="../../styles/bootstrap4/bootstrap.min.css">
<link href="../../plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../../styles/responsive.css">

<?php 
include ("../../conexion.php"); 
?>
</head>
<body>

<div class="super_container">

	<!-- Header -->
	<?php
error_reporting(0); //no se reportan los notice
	if($_SESSION["usuario"] == "estudiante"){
		include('headerEstudiante.php');
		}else if ($_SESSION["usuario"] == "administrador") {
			include( '../Administrador/headerAdministrador.php') ;
		}else if ($_SESSION["usuario"] == "administrativo") {
			include('../Administrativo/headerAdministrativo.php') ;
		}else if ($_SESSION["usuario"] == "ejecutor") {
			include('../Ejecutor/headerEjecutor.php');
		}
		else{
			include('../headerVisitante.php') ;

		}
	
?>

	
	
	<!-- Home -->

	
	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
	</br></br>	</br><h1>Listado de Auxiliaturas</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="../../images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Matematicas Discretas</a></div>
							<div class="card-text">Se requiere estudiante con disponibilidad de tiempo con dominio en python</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="../../images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Fabio Martinez<span> Profesor</span></div>
							
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="../../images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">P.O.O</a></div>
							<div class="card-text">Se necesita estudiante con conocimiento en java con promedio por encima de 3.8</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="../../images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Urbano Eliecer <span> Profesor</span></div>
							
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="../../images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Sala Villabona</a></div>
							<div class="card-text">Se requiere auxiliar con disponibilidad de tiempo para administrar la sala</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="../../images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="../../images/course_4.jpg" alt="https://unsplash.com/@kellitungay">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Redes de Computadores II</a></div>
							<div class="card-text">Se requiere estudiante con conocimiento en redes para auxiliar de la materia</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="../../images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Pedro Trujillo <span>Profesor</span></div>
							
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="../../images/course_5.jpg" alt="https://unsplash.com/@claybanks1989">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Auxiliar contable</a></div>
							<div class="card-text">se necesita estudiante para realizar oficios varios en la escuela </div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="../../images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Escuela Sistemas<span> Administrativo</span></div>

						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="../../images/course_6.jpg" alt="https://unsplash.com/@element5digital">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Auxiliar Ceis</a></div>
							<div class="card-text">Se busca asistente para administrar el centro de estudios</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="../../images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Escuela Sistemas<span> Administrativo</span></div>
							
						</div>
					</div>
				</div>

				

			</div>
		</div>		
	</div>

	<!-- Footer -->
	<?php
include ("../footerRegistrar.php"); 
	
?>

</div>

<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../styles/bootstrap4/popper.js"></script>
<script src="../../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../plugins/greensock/TweenMax.min.js"></script>
<script src="../../plugins/greensock/TimelineMax.min.js"></script>
<script src="../../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../../plugins/greensock/animation.gsap.min.js"></script>
<script src="../../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../../plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="../../plugins/easing/easing.js"></script>
<script src="../../js/courses_custom.js"></script>

</body>
</html>