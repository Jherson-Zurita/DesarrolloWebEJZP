<?php
include("conexion.php");
//include('verificar.php');
//include('permisos.php');

$id = $_POST['id']; 
$nombres = $_POST['nombre']; 
$apellidos = $_POST['apellido']; 
$edad = $_POST['edad']; 
$sexo = $_POST['sexo']; 
$ocupacion_id = $_POST['ocupacion_id']; 

if ($_FILES['fotografia']['name']!='')
{
$nombre=$_FILES['fotografia']['name'];  
$temp=$_FILES['fotografia']['tmp_name']; 
$arreglo=explode(".", $nombre);
$extension=$arreglo[1];
$nuevonombre=uniqid().".".$extension;
copy ($temp,"images/".$nuevonombre);
} else
{
    $nuevonombre=$_POST['foto'];
}

$sql = "UPDATE personas SET nombres='$nombres', apellidos='$apellidos', edad='$edad'
, sexo='$sexo', ocupacion_id='$ocupacion_id', fotografias='$nuevonombre' WHERE id=$id";

$result = $con->query($sql);
if(!$result){
    die("error al editar datos :". $con->error);
}
?>
<div>Se editó con éxito</div>

<meta><a href="read.php">Volver a leer</a></meta> 

