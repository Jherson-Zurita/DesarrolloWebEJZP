<?php session_start();

$usuario = $_POST["user"];
$contrasena = $_POST["pass"];

if ($usuario === "admin" && $contrasena === "admin") {
    $_SESSION["usuario"] = "admin";
} else if ($usuario === "user" && $contrasena === "user"){
    $_SESSION["usuario"] = "usuario";
} else {
    echo "Credenciales no validas";
    echo '<meta http-equiv="refresh" content="2; url=form.html">';
}
echo "Inicio de secion correcto.";
echo '<meta http-equiv="refresh" content="2; url=acceso.php">';
?>