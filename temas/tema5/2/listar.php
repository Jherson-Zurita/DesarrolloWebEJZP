<?php
include('verificar.php');
include("conexion.php"); 

$sql = "SELECT id, titulo, imagen FROM libros";
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) { ?>
    <table border='1'>
        <tr>
            <th>Nro</th>
            <th>Fotografia</th>
            <th>Nombre</th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="images/<?php echo $row["imagen"]; ?>" width="50" height="50"></td>
                <td><?php echo $row['titulo']; ?></td>
                <td>
                    <?php 
                    if ($_SESSION['nivel'] == 1) {
                    ?>
                        <a href="javascript:editar('<?php echo $row['id']; ?>')"><img src="images/editar.jpg"></a>
                        <a href="javascript:eliminar('<?php echo $row['id']; ?>')"><img src="images/eliminar.png"></a>
                    <?php 
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else {
    echo "<p>No hay registros en la base de datos.</p>";
}
mysqli_close($con);
?>

