<?php
include("conexion.php");
include('verificar.php');
include('permisos.php');


$id =$_POST['id']; 
$nombres = $_POST['nombre']; 
$apellidos = $_POST['apellido']; 
$edad = $_POST['edad']; 
$sexo = $_POST['sexo']; 
$ocupacion = $_POST['ocupacion'];

$nombre=$_FILES['fotografia']['name'];
$temp=$_FILES['fotografia']['tmp_name'];
$arreglo=explode(".",$nombre);
$extension=$arreglo[1];
$nuevonobre=uniqid().".".$extension;
copy ($temp,"images/".$nuevonobre);

$sql = "INSERT INTO personas( id ,nombres, apellidos, edad, sexo, opcupacion)
 VALUES ('$id', '$nombres', '$apellidos', '$edad', '$sexo', '$ocupacion')";

$result = $con->query($sql);
?>
<div>se inserto con exito</div>
<meta> <a href="read.php">volver a leer</a></meta> 
