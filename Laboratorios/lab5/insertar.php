<?php
include("conexion.php");

$titulo = $_POST['titulo']; 
$autor = $_POST['autor']; 
$edit = $_POST['editorial']; 
$anio = $_POST['anio']; 

$sql = "INSERT INTO libros ( titulo, autor, ideditorial, anio)
 VALUES ( '$titulo', '$autor', '$edit', '$anio')";

$result = $con->query($sql);
echo "datos insertados";
?>