<?php 
    $numero = $_POST['numero'];

    echo '<form action="ordenar.php" method="post">';
    for($i = 1; $i <= $numero ; $i++){
        echo '<label for="textinput'.$i.'">Palabras</label><br>';
        echo '<input type="text" name="textinput'.$i.'"><br>';
    }
    echo '<input type="hidden" name="hidden" value="'.$numero.'" />';
    echo '<input type="submit" value="Enviar">';
    echo '</form>';
?>