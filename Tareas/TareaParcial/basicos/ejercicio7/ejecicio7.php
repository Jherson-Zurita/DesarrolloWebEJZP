<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $suma = $num1 + $num2;

    echo '<table style="border: 1px solid black; border-collapse: collapse;">';
    echo '<tr>';
    echo '<th style="background-color: green; border: 1px solid black; padding: 8px;">'.$num1.'</th>';
    echo '<th style="background-color: green; border: 1px solid black; padding: 8px;">+</th>';
    echo '<th style="background-color: green; border: 1px solid black; padding: 8px;">'.$num2.'</th>';
    echo '<th style="background-color: green; border: 1px solid black; padding: 8px;">=</th>';
    echo '<th style="background-color: green; border: 1px solid black; padding: 8px;">'.$suma.'</th>';
    echo '</tr>';
    echo '</table>';
?>