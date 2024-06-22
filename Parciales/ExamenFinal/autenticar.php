<?php 
    $usuario=$_GET["user"];
    $password=sha1($_GET['pass']);
    include('conexion.php');
    $sql="SELECT usuario,nivel from usuarios where usuario='$usuario' and password='$password'";
    $result = $con->query( $sql );
    $i=1;
    if ($result->num_rows > 0) {
        $datos = $result->fetch_assoc();
        if($datos['nivel']==1){
            echo "Usuario Correcto de nivel 1";
   
        }else if ($datos['nivel']==0){
            echo "Usuario Correcto de nivel 0";
        }
    }else {
        echo "No existe el usuario"; ?>
        <?php
    }
?>