<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conekta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../css/orden.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="../conekta/conekta.js"></script>
</head>
<body>
<div class="jumbotron" >
<form action="cobro2.php" method="POST" id="card-form">
<h3>Datos de Tarjeta</h3>
  <span class="card-errors"></span>
  <div class="form-group">
    <label>
      <span>Nombre del titular de la tarjeta:</span>
      <input class="form-control-sm" type="text" size="20" name="titular" id="titular">
    </label>
  </div>
  <div class="form-group">
    <label>
      <span>Número de tarjeta:</span>
      <input class="form-control-sm" type="text" size="20" name="numt" id="numt">
    </label>
  </div>
  <div class="form-group">
    <label>
      <span>CVC:</span>
      <input class="form-control-sm" type="text" size="4" name="cvc" id="cvc">
    </label>
  </div>
  <div class="form-group">
    <label>
      <span>Fecha de expiración (MM/AAAA):</span>
      <input type="text" size="2" name="expm" id="expm">
    </label>
    <span>/</span>
    <input type="text" size="4" name="expy" id="expy">
  </div>
  <button type="submit" class="btn btn-outline-primary">Comprar</button>
  <a href="../menu/pizzas.php" class="btn btn-outline-danger">Cancelar</a>
</form>
</div>
</body>
</html>


