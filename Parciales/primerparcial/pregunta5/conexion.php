<?php
$con = new mysqli("localhost","root","12345","bd_biblioteca");
if ($con->connect_error)
    die("conexion fallada" . $con->connect_error);
?>
