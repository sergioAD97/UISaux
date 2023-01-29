<?php
error_reporting(0); //no se reportan los notice
include ("crearBD.php");

$servername = "localhost";
$database = "uisaux";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      //die("Coneccion fallida: " . mysqli_connect_error());
      crearBD(); 
}
 

 
//$sql = "INSERT INTO Students (name, lastname, email) VALUES ('Thom', 'Vial', 'thom.v@some.com')";
//if (mysqli_query($conn, $sql)) {
//      echo "New record created successfully";
//} else {
//      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//mysqli_close($conn);
?>