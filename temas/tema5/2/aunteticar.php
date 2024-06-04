<?php session_start();
    $usuario=$_POST["user"];
    $password=sha1($_POST['pass']);
    include('conexion.php');
    $sql="SELECT usuario,nivel from usuarios where usuario='$usuario' and password='$password'";
    $result = $con->query( $sql );
    $i=1;
    if ($result->num_rows > 0) {
        $datos = $result->fetch_assoc();
        if($datos['nivel']==1){
            echo "1";
            $_SESSION['usuario']=$datos['usuario'];
            $_SESSION['nivel']=$datos['nivel'];
        }else if ($datos['nivel']==0){
            echo "0";
            $_SESSION['usuario']=$datos['usuario'];
            $_SESSION['nivel']=$datos['nivel'];
        }
    }else {
        echo "3"; ?>
        <?php
    }
?>