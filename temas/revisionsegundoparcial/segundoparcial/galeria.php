<?php 
include("conexion.php");

$sql = "SELECT imagen,titulo,autor,ideditorial,anio FROM libros";


$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) {
?>
    <table border='1'>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td> <a href="javascript:mostrarimg('<?php echo $row["imagen"] ?>','<?php echo $row["titulo"] ?>','<?php echo $row["autor"] ?>','<?php echo $row["ideditorial"] ?>','<?php echo $row["anio"] ?>')"> <img src="images/<?php echo $row["imagen"] ?>" alt="" style="width: 50px; height: 75px;"> </a> </td>
            </tr>
        <?php } ?>

    </table>
    <?php } ?>
    <?php 


if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        $personas[] = $row["imagen"];
    }
}



?>

