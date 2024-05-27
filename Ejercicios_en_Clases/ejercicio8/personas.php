<?php 
include("conexion.php");

if (isset($_GET['ordenar'])) {
    $ordenar = $_GET['ordenar'];
} else {
    $ordenar = "id";
}

if (isset($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
    $sql = "SELECT p.fotografias, p.id, nombres, apellidos, edad, sexo, o.nombre as ocupacion 
            FROM personas p
            LEFT JOIN ocupaciones o on p.ocupacion_id=o.id 
            WHERE nombres LIKE '%$filtro%' OR apellidos LIKE '%$filtro%' 
            ORDER BY $ordenar ASC";
} else {
    $sql = "SELECT p.fotografias, p.id, nombres, apellidos, edad, sexo, o.nombre as ocupacion 
            FROM personas p
            LEFT JOIN ocupaciones o on p.ocupacion_id=o.id 
            ORDER BY $ordenar ASC";
}

$result = $con->query($sql);

$personas = array();
while ($row = $result->fetch_assoc()) {
    $personas[] = $row;
}

echo json_encode($personas);
?>
