<?php
session_start();
$codigo = $_POST["codigo"];
$psw1 = $_POST["psw"];
$psw = md5($psw1);



//conectar a la base de datos
$la_bd = "uisaux";
$la_tabla = "usuarios";
$db = mysqli_connect("localhost","root", "", $la_bd);

$sql = "SELECT * FROM usuarios WHERE codigo = '$codigo' AND clave ='$psw'";

$result = mysqli_query($db,$sql);
$filas = mysqli_num_rows($result);



if($filas > 0){
	$sql = "SELECT * FROM usuarios WHERE codigo = '$codigo' AND clave ='$psw'";

	$result = mysqli_query($db,$sql);
	$tipo = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$_SESSION["nombre"] = $tipo["nombre"];
   	$_SESSION["apellido"] = $tipo["apellido"];
    $_SESSION["codigo"] = $tipo["codigo"];
	$_SESSION["usuario"] = $tipo["usuario"];
	
	header("location:index.php");
	
}else{
	header("Location: ingreso.php?errorusuario=si");
	
}	
mysqli_free_result($result);
mysqli_close($db);
?>