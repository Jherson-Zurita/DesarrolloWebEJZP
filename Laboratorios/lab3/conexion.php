<?php 
$con = new mysqli("localhost","root","12345","bd_alumnos");
if($con->connect_error)
	die("coneccion fallida".$con->connect_error);
?>