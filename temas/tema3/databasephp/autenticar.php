<?php session_start();
    $correo=$_POST["correo"];
    $password=sha1($_POST['password']);
    include('conexion.php');
    $sql="SELECT correo,nivel from usuarios where correo='$correo' and password='$password'";
    $result = $con->query( $sql );
    $i=1;
    if ($result->num_rows > 0) {
        $datos = $result->fetch_assoc();
        $_SESSION['correo']=$datos['correo'];
        $_SESSION['nivel']=$datos['nivel'];
        header("location:read.php");
    }else {
        echo "error de usuario o contraseña"; ?>
        <meta http-equiv="refresh" content="3; url=form_login.html">
        <?php
    }
?>