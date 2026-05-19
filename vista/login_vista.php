<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
    <h2>Iniciar sesion</h2>
    <!--formulario de inicio de sesion-->
    <form action="../Modelo/usuario_modelo.php" method="POST">
        <label or="">Login:</label>
        <input type="text" name="login" id="" required autofocus/>
        <br><br>
        <label or="">Password:</label>
        <input type="password" name="password" id="" required/>
        <br><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>