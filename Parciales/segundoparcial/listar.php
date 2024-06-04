<?php
include("conexion.php"); 

$sql = "SELECT id, titulo, imagen,autor,ideditorial,anio FROM libros";
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) { ?>
    <table border='1'>
        <tr>
            <th>Fotografia</th>
            <th>titulo</th>
            <th>Autor</th>
            <th>Edtorial</th>
            <th>Año</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><img src="images/<?php echo $row["imagen"]; ?>" width="50" height="50"></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['autor']; ?></td>
                <td><?php echo $row['ideditorial']; ?></td>
                <td><?php echo $row['anio']; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } else {
    echo "<p>No hay registros en la base de datos.</p>";
}
mysqli_close($con);
?>