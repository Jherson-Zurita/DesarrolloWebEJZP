<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $num = $_POST["num"];
    include("conexion.php");
    $sql = "SELECT codigo, carrera FROM carreras";
    $result = $con->query($sql);

    $carreras = array();
    while ($row = $result->fetch_assoc()) {
        $carreras[] = $row;
    }
    ?>
    <div style="border: 2px solid #000000; padding: 20px; ">
        <form action="ListaALumunos.php" method="post" enctype="multipart/form-data">
            <div>
                Fotografia	Nombre	Apellido	Cu	Sexo	Carrera
                <div>
                    <input type="hidden" name="num" value="<?php echo $num?>">
                    <?php for($i=1; $i<=$num; $i++){?>
                        <label><?php echo $i?></label>
                        <input type="file" name="fotografia<?php echo $i?>">
                        <input type="text" name="nombre<?php echo $i?>">
                        <input type="text" name="apellido<?php echo $i?>">
                        <input type="number" name="cu<?php echo $i?>">
                        <input type="radio" name="sexo<?php echo $i?>" value="M">Masculino
                        <input type="radio" name="sexo<?php echo $i?>" value="F">Femenino
                        <select name="codigocarrera<?php echo $i?>">
                            <?php foreach ($carreras as $carrera) { ?>
                                <option value="<?php echo $carrera['codigo'] ?>"><?php echo $carrera['carrera'] ?></option>
                            <?php } ?>
                        </select><br>
                    <?php } ?>
                </div>
                <br>
                <input type="submit" value="Insertar">
                <input type="reset" value="Borrar">
            </div>
        </form>
    </div>

</body>
</html>