<?php
include("conexion.php"); 

$sql = "SELECT id, titulo, imagen FROM libros";
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    while ($row=$result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
 ?>