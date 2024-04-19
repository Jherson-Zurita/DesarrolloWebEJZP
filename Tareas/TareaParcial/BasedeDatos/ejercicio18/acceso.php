<?php session_start();

echo "Usuario: ".$_SESSION["usuario"]."<br>";

if ($_SESSION["usuario"] === "admin") {
    echo "<h2>Menú de Administrador</h2>";
    echo "<ul>";
    echo "<li><a href='#'>Crear</a></li>";
    echo "<li><a href='#'>Listar</a></li>";
    echo "<li><a href='#'>Borrar</a></li>";
    echo "<li><a href='#'>Salir</a></li>";
    echo "</ul>";
} else if ($_SESSION["usuario"] === "usuario"){
    echo "<h2>Menú de Usuario</h2>";
    echo "<ul>";
    echo "<li><a href='#'>Listar</a></li>";
    echo "</ul>";
} else {
    echo "Secion no valida!";
    
}
?>

