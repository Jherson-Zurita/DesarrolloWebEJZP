<?php

    include("utiles.php");

    $text = $_GET["text"];
    $num = $_GET["num"];

    $utiles = new Utiles($text);
    echo $utiles->aumentarGuiones($num);

?>