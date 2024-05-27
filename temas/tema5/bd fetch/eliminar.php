<?php
include("conexion.php");

$id =$_GET['id'];  

$sql = "DELETE FROM personas where id=$id";

$result = $con->query($sql);
if(!$result){
    die("Error al eliminar datos: " . $con->error);
}
?>
<div>se elimino con exito</div>
