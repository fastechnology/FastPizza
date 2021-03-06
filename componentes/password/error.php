<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/login/login.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.rtl.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.rtl.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.rtl.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.rtl.min.css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
    <title>Recuperación</title>
</head>
<body>
    <br>
    <div class="padre">
    <div class="hijo">
    <h4>Recuperar contraseña:</h4>
        <form action="sendpass.php" method="POST">
            <label for="user">Email:</label>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" required>
            </div>
                    <input type="submit" value="Recuperar" class="btn btn-outline-primary">
                    <a href="../../index.php" class="btn btn-outline-danger">Regresar</a>
                    <footer><a href="" data-toggle="modal" data-target="#ModalRegistro">¿Eres nuevo?</a></footer>              
        </form>
        </div>
    </div>
</body>
</html>
<?php require '../login/registro/formularioregistrousuario.php' ?>
        <script>
		function miFuncion() {
			alertify.alert('Ups..: ',"Este usuario no esta registrado.").set({transition:'zoom',message: 'Este usuario no esta registrado.'}).show(); 
		}
		window.onload=miFuncion;
        </script>