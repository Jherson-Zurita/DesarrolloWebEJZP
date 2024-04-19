<?php
include("conexion.php");
include('verificar.php');
include('permisos.php');

$id =$_GET['id'];  

$sql = "DELETE FROM personas where id=$id";

$result = $con->query($sql);
if(!$result){
    die("Error al eliminar datos: " . $con->error);
}
?>
<div>se elimino con exito</div>
<meta http-equiv="refresh" content="5; url=read.php">
<meta> <a href="read.php">volver a leer</a></meta> 