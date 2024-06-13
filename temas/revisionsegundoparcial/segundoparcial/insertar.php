<?php
include("conexion.php");

$titulo = $_POST['titulo']; 
$autor = $_POST['autor']; 
$edit = $_POST['edit']; 
$anio = $_POST['anio']; 


$nombre=$_FILES['fotografia']['name'];
$temp=$_FILES['fotografia']['tmp_name'];
$arreglo=explode(".",$nombre);
$extension=$arreglo[1];
$nuevonobre=uniqid().".".$extension;
copy ($temp,"images/".$nuevonobre);

$sql = "INSERT INTO libros (imagen, titulo, autor, ideditorial, anio)
 VALUES ( '$nuevonobre', '$titulo', '$autor', '$edit', '$anio')";

$result = $con->query($sql);
echo "daatos insertados";
?>