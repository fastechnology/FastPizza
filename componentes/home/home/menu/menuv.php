<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <?php session_start(); if($_SESSION['user']!=""){ ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/menup.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title></title>
    </head>
    <body>
    <?php
    require ('../../../navbar/index2.php');
    ?>
   <div class="container">   
    <?php
    require '../../../basededatos/conexion.php';
    $sql=$conexion->query("SELECT *from pizza");
    $filas=$sql->num_rows;
    while($fila=$sql->fetch_assoc()){
                    ?>
                    <div class="card-body">
                      <div class="imgBx">
                           <img src="<?php echo $fila['img']; ?>"
                            width=100% heigth=100% >
                      </div>
                      <div class="content">
                      <h4 class="card-title"><?php echo $fila['tipo'] ?></h4>
                      <img src="" width=100; heigth=100;>
                      <form action="../tomarorden/buscarpizzasuc.php" method="POST">
                      <input type="text" name="tipo" id="tipo" value="<?php echo $fila['codPizza']; ?>" style=visibility: hidden>
                      <p class="card-text">Ingredientes: <?php echo $fila['ingredientes']; ?></p>
                      <div class="col-auto my-1">
                        <select class="custom-select mr-sm-2" name="extra" id="extra">
                        <option selected>Ingredientes Extras?</option>
                         <option value="1">Orilla Rellena de Queso $10</option>
                        <option value="2">Extra Queso $10</option>
                         <option value="3">Ambos $18</option>
                    </select>
                        </div>
                          <br>
                      <select class="custom-select mr-sm-2" name="tam" id="tam" required>
                      <option value="">Elegir tamaño</option>
                      <option value="CH">Chica 6 rebanadas $90</option>
                      <option value="MD">Mediana 8 rebanadas $100</option>
                      <option value="GR">Grande 10 rebanadas $110</option>
                      <option value="FA">Familiar 12 rebanadas $120</option>
                      </select><br><br>
                      <input type="number" class="form-control-sm" name="cant" id="cant" placeholder="Cantidad" required>
                      <br><br>
                      <button type="submit" class="btn btn-primary">Ordenar</button>
                      </form>
                      </div>
                    </div>
                  <?php
				}
            $conexion->close();
            ?>
</div> 
<br>
</body>
</html>
<?php }
        else{
            header("Location: ../../../../index.php");
        }