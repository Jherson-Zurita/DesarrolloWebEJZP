<?php
include("conexion.php");
include('verificar.php');
include('permisos.php');

$id = $_POST['id']; 
$nombres = $_POST['nombre']; 
$apellidos = $_POST['apellido']; 
$edad = $_POST['edad']; 
$sexo = $_POST['sexo']; 
$ocupacion_id = $_POST['ocupacion_id']; 

if ($_FILES['fotografia']['name']!='')
{
$nombre=$_FILES['fotografia']['name'];  //obtenemos el nombre del archivo
$temp=$_FILES['fotografia']['tmp_name']; //obtenemos la ruta del archivo en el servidor
$arreglo=explode(".", $nombre);
$extension=$arreglo[1];// obtengo la extension del archivo
$nuevonombre=uniqid().".".$extension;//Le doy un nuevo nombre de archivo
copy ($temp,"images/".$nuevonombre);//copio el archivo a la carpeta de imagenes
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
<meta http-equiv="refresh" content="5, url=read.php">
<meta><a href="read.php">Volver a leer</a></meta> 

