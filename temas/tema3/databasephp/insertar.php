<?php
include("conexion.php");

$id =$_POST['id']; 
$nombres = $_POST['nombre']; 
$apellidos = $_POST['apellido']; 
$edad = $_POST['edad']; 
$sexo = $_POST['sexo']; 
$ocupacion = $_POST['ocupacion']; 

$sql = "INSERT INTO personas( nombres, apellidos, edad, sexo, ocupacion) VALUES ('$id', '$nombres', '$apellidos', '$edad', '$sexo', '$ocupacion')";
echo $sql;
$result = $con->query( $sql );
?>
