<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/login/login.css">
    <title>Pizzeria: Registro</title>
</head>
<body>
    <?php require '../../navbarsetc/navbar.php' ?>
    <div class="login">
    <h2>Registro:</h2>
        <form action="../registro/registrouser.php" method="POST">
            <label for="email">Email:</label>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email"  required>
                </div>
                <label for="user">Nombre de Usuario:</label>
                <div class="from-group">
                    <input type="text" class="form-control" name="user" id="user" required>
                </div>
                <label for="pass">Contraseña:</label>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" id="pass" required>
                </div>
                <div class="padre">
                <div class="hijo">
                    <input type="submit" value="Registrar" class="btn btn-outline-primary">
                </div>
                <div class="hijo">
                    <a href="../../../index.php" class="btn btn-outline-danger">Cancelar!</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>