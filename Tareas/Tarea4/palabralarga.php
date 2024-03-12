<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    function palabraGrande($str) {
        $pp = explode(" ", str_replace(",", " ", $str));
        $palabraMasGrande = "";

        foreach ($pp as $palabra) {
            if (strlen($palabra) > strlen($palabraMasGrande)) {
                $palabraMasGrande = $palabra;
            }
        }
        return $palabraMasGrande;
    }

    $cadenaEjemplo = "Esta, es una oracion con algunas palabras";
    $palabraMasLarga = palabraGrande($cadenaEjemplo);

    echo "La palabra más larga es: $palabraMasLarga";

?>



</body>
</html>