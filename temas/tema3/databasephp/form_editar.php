<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Personas</h1>
    <?php $id=$_GET['id']; 
    include("conexion.php");
    include('verificar.php');
    include('permisos.php');
    $sql = "SELECT id,fotografias,nombres,apellidos,edad,sexo,ocupacion_id FROM personas where id=".$id;
    $result = $con->query( $sql );
    $datos = $result->fetch_assoc();

    $sql="SELECT id,nombre from ocupaciones";
    $resultocupa = $con->query($sql);
    
    ?>
    <h1>Editar Persona</h1>

    <form action="editar.php" method="post" enctype="multipart/form-data">
        <img src="images/<?php echo $datos['fotografias']?>" >
        <br>
        <label for="fotografia">Fotografia</label>
        <input type="file" name="fotografia" ><br>
        <input type="hidden" name="id" value="<?php echo $datos['id'];?>">
        <input type="hidden" name="foto" value="<?php echo $datos['fotografias'];?>">
        <label for="nombre">Nombre: </label><br>
        <input type="text" id="nombre" name="nombre" value="<?php echo $datos['nombres'];?>"><br>
        <label for="apellido">Apellido: </label><br>
        <input type="text" id="apellido" name="apellido" value="<?php echo $datos['apellidos'];?>"><br>
        <label for="edad">Edad: </label><br>
        <input type="number" id="edad" name="edad" value="<?php echo $datos['edad'];?>"><br>
        <label for="sexo">  Sexo: </label><br>
        <input type="radio" name="sexo" value="M" <?php echo $datos['sexo']=='M'? 'checked' : ''?> > Masculino<br>
        <input type="radio" name="sexo" value="F" <?php echo $datos['sexo']=='F'? 'checked' : ''?> > Femenino<br>
        <label for="ocupacion"> Ocupación: </label><br>
        <select name="ocupacion_id" >
            <?php while ($ocupacion = $resultocupa->fetch_assoc()) {
        ?>
        <option value="<?php  echo $ocupacion['id'] ?>"   
        <?php echo $ocupacion['id']==$datos['ocupacion_id']?"selected":"";?>
        
        ><?php  echo $ocupacion['nombre'] ?></option>
        <?php }?>
         </select><br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
