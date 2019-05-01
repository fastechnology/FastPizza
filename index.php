<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Framework/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login/login.css">
    <title>Pizzeria: Login</title>
</head>
<body>
   <?php require 'componentes/navbarsetc/navbar.php' ?>
    <br>
    <div class="login">
        <h2>Inicio de Sesión:</h2>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqTZzBD90a3ted1H0qYV1xtJwdP9Ew0SFpGKRoEdusCeb7onbK"
            class="d-inline-block align-top" alt="">
        <form action="componentes/login/controllogin.php" method="POST">
            <label for="user">Email:</label>
            <div class="form-group">
                <input type="email" class="form-control" name="user" id="user" required>
            </div>
            <label for="pass">Contraseña:</label>
            <div class="form-group">
                <input type="password" class="form-control" name="pass" id="pass" required>
            </div>
            <br>
            <div class="padre">
                <div class="hijo">
                    <input type="submit" value="Ingresar" class="btn btn-outline-primary">
                </div>
                <div class="hijo">
                    <a href="componentes/login/registro/formularioregistrousuario.php" class="btn btn-outline-danger">Registrate!</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>