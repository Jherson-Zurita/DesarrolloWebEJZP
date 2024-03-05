<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $A[0]=5;
    $A[1]="juan";
    $B[0]=$A;
    echo $B[0][0];
    $vocales = array("a","e","i","o","u");

    foreach ($vocales as $v){
        echo $v;
    }

    ?>

    <h2>Recoridos de v6ca3es</h2>
    <?php
   

    foreach ($vocales as $valor=>$v) {  
        echo "vocal[".$valor."]".$v."<br>";
    }
    ?>

    <h3>arreglos cualificados</h3>
    <?php
    $alumnos=array("nombre"=>"juan","edad"=>15);

    foreach($alumnos as $indice=>$v){
        echo "alunmo[".$indice."]=".$v."<br>";
    }

    echo "<hr>";
    echo $alumnos["nombre"];
    echo "<hr>";
    echo $alumnos["edad"];
    ?>
    
</body>
</html>