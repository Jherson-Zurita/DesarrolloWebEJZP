<?php
include("conexion.php");
//include('verificar.php');
//include('permisos.php');



$nombres = $_POST['nombre']; 
$apellidos = $_POST['apellidos']; 
$edad = $_POST['edad']; 
$sexo = $_POST['sexo']; 
$ocupacion = $_POST['ocupacion_id'];

$nombre=$_FILES['fotografia']['name'];
$temp=$_FILES['fotografia']['tmp_name'];
$arreglo=explode(".",$nombre);
$extension=$arreglo[1];
$nuevonobre=uniqid().".".$extension;
copy ($temp,"images/".$nuevonobre);

$sql = "INSERT INTO personas (nombres, apellidos, edad, sexo, ocupacion_id, fotografias)
 VALUES ( '$nombres', '$apellidos', '$edad', '$sexo', '$ocupacion', '$nuevonobre')";

$result = $con->query($sql);
?>
<div>se inserto con exito</div>

