<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/login/login.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Activacion de cuenta:</title>
</head>
<body>
    <br>
    <div class="login">
        <h4>Inicia sesión para activar tu cuenta.</h4>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqTZzBD90a3ted1H0qYV1xtJwdP9Ew0SFpGKRoEdusCeb7onbK"
            class="d-inline-block align-top" alt="">
        <form action="activar.php" method="POST">
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
                    <input type="submit" value="Activar" class="btn btn-outline-primary">
                </div>
                <div class="hijo">               
                </div>
            </div>
        </form>
    </div>
</body>
</html>