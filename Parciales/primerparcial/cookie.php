<?php 
    $text = $_POST["text"];
    setcookie('contador', $text, 0);

    echo '<a href="Mayuscula.php">Mayuscula</a><br>';
    echo '<a href="Minuscula.php">Misucula</a><br>';
    echo '<a href="Oracion.php">Oracion</a><br>';

?>