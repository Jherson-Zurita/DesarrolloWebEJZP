<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "No inicio sesion";
    die('No inicio sesion');
} 
?>
