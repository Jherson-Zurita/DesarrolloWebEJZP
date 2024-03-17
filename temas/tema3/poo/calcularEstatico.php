<?php

include ("operacionesstatica.php");

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operacion = $_GET['operacion'];

switch ($operacion) {
    case "sumar":
        echo OperacionesEstatica::Sumar($num1,$num2);
        break;
    case "restar":
        echo OperacionesEstatica::Restar($num1,$num2);
        break;
    case "multiplicar":
        echo OperacionesEstatica::Multiplicar($num1,$num2);
        break;
    case  "dividir":
        echo OperacionesEstatica::Dividir($num1,$num2);
        break;
}
?>