<style>
    table {
        border-collapse: collapse;
        width: 50%;
    }
    th, td {
        border: 1px solid green;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #ffffff;
    }
</style>

<?php 
    $celaius = $_POST['numero'];
    $tipo = $_POST['conversion'];
    $resultado = 0;
    
    if($tipo == 'F'){
        $resultado = ($celaius*5/9) + 32;
        echo "<table>";
        echo "<tr>";
            echo "<td>Celsius a Fahrenheit</td>";
            echo "<td>" . $resultado . " grados Fahrenheit</td>";
        echo "</tr>";
        echo "</table>";
    }elseif ($tipo == 'K'){
        $resultado = $celaius + 273.15;
        echo "<table>";
        echo "<tr>";
            echo "<td>Celsius a Kelvin</td>";
            echo "<td>" . $celaius . " grados Kelvin</td>";
        echo "</tr>";
        echo "</table>";
    }
?>