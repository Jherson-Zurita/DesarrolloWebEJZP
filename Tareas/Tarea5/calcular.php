<?php

include ("OperacionesCadena.php");

$cadena = $_POST["cadena"];
$operacion = new OperacionesCadena($cadena);

echo "Cadena invertida: " . $operacion->invertir() . "<br>";
echo "Cadena en mayúsculas: " . $operacion->mayuscula() . "<br>";
echo "Cadena en minúsculas: " . $operacion->minuscula() . "<br>";

?>