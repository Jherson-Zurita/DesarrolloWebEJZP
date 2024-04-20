<?php 
    if(isset($_COOKIE['contador'])) {
        $valor = $_COOKIE['contador'];
        echo strtoupper($valor);
    }
?>