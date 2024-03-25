<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <h2>Ingrese Grados Celsius:</h2>
    <form action="calcular.php" method="post">
        <label for="numero">Celsius</label>
        <div>
            <input type="number" name="numero">
        </div>
        <div>
            <label for="conversion">  Convertir a: </label><br>
            <input type="radio" name="conversion" value="K"> Kelvin <br>
            <input type="radio" name="conversion" value="F"> Fahrenheit<br>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>