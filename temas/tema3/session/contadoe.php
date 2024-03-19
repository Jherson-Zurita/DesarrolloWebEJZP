<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();
        if(isset($_SESSION['contador']))
        {
            $_SESSION['contador']++;
        }else
        {
            $_SESSION['contador']=1;
        }
        echo "valor de la visita".$_SESSION['contador'];
    ?>
    <br>
    <a href="cerrar.php">Cerrar sesion</a>
</body>
</html>