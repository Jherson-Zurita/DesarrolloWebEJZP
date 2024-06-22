<?php 
$con = new mysqli("localhost","root","12345","bd_academica");
if($con->connect_error)
	die("coneccion fallida".$con->connect_error);
?>