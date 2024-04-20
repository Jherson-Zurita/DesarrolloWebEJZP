<?php 
include("estante.php");

$arr=array();
$arr2=array();
$utiles = new Estante($arr,$arr2);
if (isset($_POST['libro1'])){
    $libro=$_POST['libro1'];
    $utiles->insertarFila1($libro);

} else if(isset($_POST['libro2'])){
    $libro=$_POST['libro2'];
    $utiles->insertarFila1($libro);
}



echo '<meta http-equiv="refresh" content="2; url=pregunta3.html">';

?>