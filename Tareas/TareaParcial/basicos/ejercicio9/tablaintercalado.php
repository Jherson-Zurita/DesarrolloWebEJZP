<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabla{
            border: 1px solid black;
            border-collapse: collapse;
        }
        .celda{
            border: 1px solid black; 
            padding: 15px; width: 150px;
        }
        .celda1{
            border: 1px solid black; 
            padding: 15px; width: 150px;
            background: red;
        }
        .celda2{
            border: 1px solid black; 
            padding: 15px; width: 150px;
            background: yellow;
        }
        .celda3{
            border: 1px solid black; 
            padding: 15px; width: 150px;
            background: green;
        }
    </style>
</head>
<body>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
    ?>
    <table class="tabla">
        <?php
        $color=1;
        for($i = 0; $i < $num1; $i++) { 
            ?>
            <tr class="celda<?php echo $color;?>">
            <?php $color = ($color == 3) ? 1 : $color + 1;for($j = 0; $j < $num2; $j++) { ?>
                <th class="celda"></th>
            <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

