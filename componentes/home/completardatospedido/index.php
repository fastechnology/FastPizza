<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/login/login.css">
    <title>FastPizza</title>
</head>
<body>
    <div class="login">
        <h2>Completa tus datos de pedido..</h2>
        <form action="insertardatos.php" method="POST">

            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre.." required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección.." required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono.." required>
            </div>
            <div class="padre">
                <div class="hijo">
            <input type="submit" value="Listo!" class="btn btn-outline-primary">
</div>
        </form>
    </div>
</body>
</html>