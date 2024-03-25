<?php
function ordenarPalabras(array $palabras) {
    sort($palabras);
    return $palabras;
}

$numero = $_POST['hidden'];
$palabras = [];

for($i=0;$i<$numero;$i++){
    $palabras[$i] = $_POST['textinput'.$i];
}

$palabrasordenadas = ordenarPalabras($palabras);

echo "<div>
        <ol>";
        for ($i = 0; $i < count($palabras); $i++) {
            echo "<li>" . $palabrasordenadas[$i] . "</li>";
        }
        echo "</ol>
    </div>";
?>