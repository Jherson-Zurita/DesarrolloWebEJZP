<?php
include("conexion.php");

$id =$_GET['id'];  

$sql = "DELETE FROM libros where id=$id";

$result = $con->query($sql);
if(!$result){
    die("Error al eliminar datos: " . $con->error);
}
?>

