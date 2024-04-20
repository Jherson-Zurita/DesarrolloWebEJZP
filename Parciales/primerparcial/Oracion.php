<?php 
    if(isset($_COOKIE['contador'])) {
        $valor = $_COOKIE['contador'];
        $m = $valor[0];
        $n = strtoupper($m);
        echo str_replace($m,$n,$valor);
    }
?>