<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_COOKIE['contador'])) {
            $valor = $_COOKIE['contador'] + 1;
            setcookie('contador', $valor, 0);
            echo "Gracias por ser un visitante frecuente. Usted ha visitado este sitio $valor veces.";
            if($valor > 5) {
                echo "<h2>Encuesta</h2>";
                echo "¿Qué le gusta de la página?:<br>";
                echo "- Sus colores<br>";
                echo "- Su funcionalidad<br>";
            }
        } else {
            echo "Bienvenido";
            $valor = 1;
            setcookie('contador', $valor, 0);
        }
        // setcookie('contador', -1, time() - 3600);
    ?>
</body>
</html>
