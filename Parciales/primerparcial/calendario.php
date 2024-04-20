<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabla{
            border: 1px solid green;
            border-collapse: collapse;
        }
        .ta {
            background-color: green ;
        }
        .celda{
            border: 1px solid green; 
           
        }
    </style>
</head>
<body>
<?php 
    $mes = $_POST["mes"];
    $anio = $_POST["anio"];
    $alto = $_POST["alto"];

    $num_dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
    $fecha = $anio.'-'.$mes.'-'.'01';
    $dia_semana = date('N', strtotime($fecha));
    $d=7;
    ?>

    <table class="tabla">
        <tr class="ta">
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sabado</th>
            <th>Domingo</th>
        </tr>
        <?php 
            for($i=1;$dia_semana>$i;$i++){
                echo "<td class='celda'> </td>";
                
                $d=$d-$i;
            }
            $d+=1;

            for($j=1;$d>=$j;$j++){
                echo"<td class='celda'>$j</td>";
                if ($j==$d){
                    $j+=1;
                }
                
            }
            $x=$j-1;
            for ($a=$x;$num_dias>=$a;$a++){

                echo "<tr>";
                echo"<td class='celda'>$a</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
