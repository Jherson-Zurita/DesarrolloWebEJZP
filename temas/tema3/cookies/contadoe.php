<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_COOKIE['contador']))
        {
            $valor=$_COOKIE['contador']+1;
            setcookie('contador',$valor,0);
        }else
        {
            $valor=1;
        }
        setcookie('contador',$valor,0);
        echo "valor de la visita $valor"
    ?>
</body>
</html>