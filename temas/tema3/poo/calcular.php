<?php

include ("operaciones.php");

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operacion = $_GET[ "operacion" ];

$o = new  Operaciones($num1, $num2);
switch ($operacion) {
    case "sumar":
        echo $o->Suma();
        break;
    case "restar":
        echo $o->Resta();
        break;
    case "multiplicar":
        echo $o->Multiplicar();
        break;
    case  "dividir":
        echo $o->Dividir();
        break;
}
?>