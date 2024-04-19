<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a censo</h1>
    <form action="autenticar.php" method="post">
        <div>
            <label for="correo">Correo Electronico</label>
            <input type="email" name="correo">
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="ingresar">
        <input type="reset" value="limpiar">
    </form>
</body>
</html>