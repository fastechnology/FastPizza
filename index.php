<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/login.css">
    <title>FARMACOL</title>
</head>
<body>
    <div class="jumbotron" id="loginn">
        <h1 id="farm">FARMACOL: INICIO DE SESIÓN</h1>
        <form action="php/validadordelogin.php" method="POST">
            <label>Usuario</label><br>
            <input type="text" name="user" id="usuario" required><br>
            <label>Contraseña</label><br>
            <input type="password"  name="pass" id="passw" class="form-control" required><br>
            <button type="submit" class="btn btn-send btn-lg" id="enviar">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
