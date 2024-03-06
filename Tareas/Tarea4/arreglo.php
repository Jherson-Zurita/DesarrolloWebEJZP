<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    $numpar = [];
    $numimpar = [];

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $numpar[] = $numero;
        } else {
            $numimpar[] = $numero;
        }
    }

    echo "<h3>Números pares: " . implode(", ", $numpar) . "</h3>";
    echo "<h3>Números impares: " . implode(", ", $numimpar) . "</h3>";
    ?>
</body>
</html>
