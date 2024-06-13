<?php
include("conexion.php");

$id=$_POST['id'];
$titulo = $_POST['titulo']; 
$autor = $_POST['autor']; 
$edit = $_POST['editorial']; 
$anio = $_POST['anio'];  

$sql = "UPDATE libros SET titulo='$titulo ', autor='$autor', ideditorial='$edit', anio='$anio' WHERE id=$id";

$result = $con->query($sql);
if(!$result){
    die("error al editar datos :". $con->error);
}
?>


