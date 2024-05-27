<?php
//include('verificar.php');
//echo $_SESSION['correo'];
//echo $_SESSION['nivel'];
?>
<a href="cerrar.php">cerrar sesion</a>
<form action="javascript:buscar('')" method="get">
    <label for="filtro">Buscar</label>
    <input type="text" name="filtro" id="filtro">
    <input type="submit" value="Buscar">
</form>
<?php
include("conexion.php");

if (isset($_GET['ordenar']))
{
    $ordenar=$_GET['ordenar'];
}else {
    $ordenar="id";
}
if (isset($_GET['filtro']))
{
    $filtro=$_GET['filtro'];
    $sql = "SELECT p.fotografias,p.id,nombres,apellidos,edad,sexo,o.nombre as ocupacion FROM personas p
    LEFT JOIN ocupaciones o on p.ocupacion_id=o.id where nombres like '%$filtro%' or apellidos like '%$filtro%' order by $ordenar asc";
}
else
{
    $sql = "SELECT p.fotografias,p.id,nombres,apellidos,edad,sexo,o.nombre as ocupacion FROM personas p
    LEFT JOIN ocupaciones o on p.ocupacion_id=o.id order by $ordenar asc";
}

$result = $con->query( $sql );
$i = 1;
if($result->num_rows > 0){?>
    <table border='1'>
        <tr>
            <th>Nro</th>
            <th>Fotografia</th>
            <th><a href="javascript:listar('ordenar=nombres')">Nombre</a></th>
            <th><a href="javascript:listar('ordenar=apellidos')">Apellido</a></th>
            <th><a href="javascript:listar('ordenar=edad')">Edad</a></th>
            <th><a href="javascript:listar('ordenar=sexo')">Sexo</a></th>
            <th><a href="javascript:listar('ordenar=ocupacion')">Ocupacion</a></th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row=$result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="images/<?php echo $row["fotografias"]; ?>" width="50" height="50"></td>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['edad']; ?></td>
                <td><?php echo $row['sexo']; ?></td>
                <td><?php echo $row[ 'ocupacion' ]; ?></td>
                <td><?php 
                    ?>
                <a  href="javascript:editar('<?php echo $row['id']; ?>')"><img src="images/editar.jpg"></a>
                <a href="javascript:eliminar('<?php echo $row['id']; ?>')"><img src="images/eliminar.png"></a></td>
           <?php ?>
            </tr>
        <?php } ?>
        </table>
<?php }else{echo "<p>No hay registros en la base de datos.</p>";}
mysqli_close($con);
?>
<a href="form_insertar.php">Insertar</a>

                



