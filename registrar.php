<?php session_start();
include ("conexion.php"); 
if(!empty($_POST))
{
	$alert='';
	if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['codigo']) || empty($_POST['clave']) || empty($_POST['usuario']))
	{
		$alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
	}else{

		$nombre = $_POST['nombre'];
		$apellido  = $_POST['apellido'];
		$codigo   = $_POST['codigo'];
		$clave  = md5($_POST['clave']);
		$usuario    = $_POST['usuario'];


		$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE codigo = '$codigo' ");
		$result = mysqli_fetch_array($query);

		if($result > 0){
			$alert='<p class="msg_error">El correo o el usuario ya existe.</p>';
		}else{

			$query_insert = mysqli_query($conn,"INSERT INTO usuarios(nombre,apellido,codigo,clave,usuario)
																VALUES('$nombre','$apellido','$codigo','$clave','$usuario')");
			if($query_insert){
				$alert='<p class="msg_save">Usuario creado correctamente.</p>';
			}else{
				$alert='<p class="msg_error">Error al crear el usuario.</p>';
			}

		}


	}

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Registrar</title>
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

</head>
<body>

<div class="super_container">
<?php 
		error_reporting(0); 
		?>
	<!-- Register -->

	<div class="register">

		
							
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Por favor ingrese los datos requeridos</h1>
							
							<form id="search_form" class="search_form" action="" method="POST">
							    <input id="nombre" name="nombre" class="input_field search_form_category" type="text" placeholder="Nombre"required="required" data-error="Se requiere nombre.">
							    <input id="apellido" name="apellido" class="input_field search_form_category" type="text" placeholder="Apellido"required="required" data-error="Se requiere Apellido.">
                                <input id="codigo" name="codigo" class="input_field search_form_name" type="text" placeholder="Codigo" required="required" data-error="Se requiere codigo.">
								<input id="clave" name="clave" class="input_field search_form_category" type="password" placeholder="Contraseña"required="required" data-error="Registre su contraseña.">
								<br><br>
								<select id="usuario" name="usuario" class="input_field search_form_name" type="text" placeholder="Tipo de usuario" required="required" data-error="Seleccione su tipo de usuario.">
								<option value="">-- Seleccione tipo de usuario</option>
								<option value="administrador">Administrador</option>
								<option value="ejecutor">Ejecutor</option>
								<option value="administrativo">Administrativo</option>
								<option value="estudiante">Profesor</option>
							</select>
							<br><br>
							<span><?php echo isset($alert) ? $alert : ''; ?></p>
                                <button id="search_submit_button" name="submit" type="submit" class="search_submit_button trans_200" value="Submit"  >Registrar</button>
                                <button class="search_submit_button trans_200" value="Submit" onclick="window.location.href='ingreso.php'">Atras</button>
							</form>
						</div> 
					</div>
					

			
			
		
	</div>


	
	<?php 
include ("phpUISaux/footerRegistrar.php"); 
?>

	

</body>
</html>