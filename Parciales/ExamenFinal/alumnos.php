
<?php
    $id=$_GET['materia']; 

    if($id==1){
        $materia="'SIS256'";
    }else if($id==2){
        $materia="'SIS258'";
    }else if($id==3){
        $materia="'SIS406'";
    }


    include("conexion.php");
    $sql = "SELECT id, materia,nombres_apellidos,celular FROM alumnos where materia=".$materia;
    $result = $con->query( $sql );
    $i = 1;
if ($result->num_rows > 0) { ?>
    <table border='1'>
        <tr>
            <th>materia</th>
            <th>nombre</th>
            <th>celular</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['materia']; ?></td>
                <td><?php echo $row['nombres_apellidos']; ?></td>
                <td><?php echo $row['celular']; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } else {
    echo "<p>No hay registros en la base de datos.</p>";
}
mysqli_close($con);
?>

    