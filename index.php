<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zapateria</title>
</head>
<body>
    <h1>Zapateria La Sangileña</h1>
    <div id="div inicio sesion">
        <form action="modelo/loguear.php" method = "post">
            <label for="">Usuario:</label>
            <input type="text" name="usuario" id="" placeholder = "Usuario"required>
            <br>
            <label for="">Contraseña:</label>
            <input type="password" name="clave" id="" placeholder = "Contraseña" required>
            <br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>