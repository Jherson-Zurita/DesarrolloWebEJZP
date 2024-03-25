<?php

include("conexion.php");
$sql = "SELECT id,nombres,apellidos,edad,sexo,opcupacion FROM personas";
$result = $con->query( $sql );
if($result->num_rows > 0){?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Ocupacion</th>
        </tr>
        <?php while ($row=$result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['apellidos'] ?></td>
                <td><?php echo $row['edad'] ?></td>
                <td><?php echo $row['sexo'] ?></td>
                <td><?php echo $row[ 'opcupacion' ] ?></td>
            </tr>
        <?php } ?>
        </table>
<?php }else{echo "<p>No hay registros en la base de datos.</p>";}

$con->close();
?>
        
                



