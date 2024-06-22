<?php
include('conexion.php');

$sql = "SELECT id,materia FROM usuarios_materias";
$result = $con->query( $sql );?>

<select name="materia" id="materia" onchange="alumnos()">
    <?php while ($materia = $result->fetch_assoc()) {?>
    <option value="<?php  echo $materia['id'] ?>"           
    ><?php  echo $materia['materia'] ?></option>
<?php }?>
</select>
<div id="alumnos">

</div>
