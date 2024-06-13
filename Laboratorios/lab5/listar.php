<?php
include("conexion.php"); 

$sql = "SELECT l.id, titulo, imagen,autor,anio,e.editorial as editorial FROM libros l LEFT JOIN editoriales e on l.ideditorial = e.id";
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) { ?>
    <table border='1'>
        <tr>
            <th>titulo</th>
            <th>Autor</th>
            <th>Edtorial</th>
            <th>Año</th>
            <th>Operacion</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['autor']; ?></td>
                <td><?php echo $row['editorial']; ?></td>
                <td><?php echo $row['anio']; ?></td>
                <td><a href="javascript:editar(<?php echo $row['id']; ?>)"><img src="images/editar.jpg"></a>
                <a href="javascript:confirmar(<?php echo $row['id']; ?>)"><img src="images/eliminar.png"></a>
                <a href="javascript:mostrar(<?php echo $row['id']; ?>)">Mostrar</a></td>
            </tr>
        <?php } ?>
    </table>
<?php } else {
    echo "<p>No hay registros en la base de datos.</p>";
}
mysqli_close($con);
?>