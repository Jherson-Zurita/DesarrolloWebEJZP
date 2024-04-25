<?php
include("conexion.php");
$num = $_POST["num"];

for ($i = 1; $i <= $num; $i++) {
    $nombre = $_POST["nombre$i"];
    $apellido = $_POST["apellido$i"];
    $cu = $_POST["cu$i"];
    $sexo = $_POST["sexo$i"];
    $codigocarrera = $_POST["codigocarrera$i"];

    $fotografia = $_FILES["fotografia$i"]["name"];
    $temp = $_FILES["fotografia$i"]["tmp_name"];
    $arreglo = explode(".", $fotografia);
    $extension = end($arreglo);
    $nuevonobre = uniqid().".".$extension;
    copy($temp,"images/".$nuevonobre);

    $sql_insert = "INSERT INTO alumnos (fotografia, nombres, apellidos, cu, sexo, codigocarrera) VALUES ('$nuevonobre', '$nombre', '$apellido', '$cu', '$sexo', '$codigocarrera')";
    $result_insert = $con->query($sql_insert);
}

$sql = "SELECT * FROM alumnos ORDER BY id DESC LIMIT $num";
$result = $con->query($sql);

echo "<table border='1'>";
echo "<tr><th>Fotografia</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>CU</th>
        <th>Sexo</th>
        <th>Carrera</th></tr>";
while ($row = $result->fetch_assoc()) {

    $codigocarrera = $row['codigocarrera'];
    $sql_carrera = "SELECT carrera FROM carreras WHERE codigo = '$codigocarrera'";
    $result_carrera = $con->query($sql_carrera);
    $carrera_row = $result_carrera->fetch_assoc();
    $carrera = $carrera_row['carrera'];
        
    echo "<tr>";
    echo "<td><img src='images/{$row["fotografia"]}' width='50' height='50'></td>";
    echo "<td>{$row['nombres']}</td>";
    echo "<td>{$row['apellidos']}</td>";
    echo "<td>{$row['cu']}</td>";
    echo "<td>{$row['sexo']}</td>";
    echo "<td>$carrera</td>";
    echo "</tr>";
}
echo "</table>";

?>

