<meta charset="UTF-8">
<?php session_start(); if($_SESSION['orden']!=null){ ?>
<?php
include '../../../basededatos/conexion.php';
include '../../../sesiones/datosuser.php';
include 'datosorden.php';
$orden=$_SESSION['orden'];

$sql1=$conexion->query("UPDATE ventas set estado=1 where nv=$orden ");
date_default_timezone_set('America/Mexico_City');
  $Date = date('m/d/Y h:i:s A');
  $timestamp = time();
echo "Suc. 01 Tlaxiaco,Oax.";
echo "<br>";
echo "Calle Desconocida S/N";
echo "<br>";
echo "Colonia Desconocida";
echo "<br>";
echo "C.P: 69800";
echo "<br>______________________";
echo"<br>"; 

echo "<br>";
echo "Fecha:- ". $Date;
//echo "<br>Estado venta: ". $order->payment_status;
echo "<br>Orden: ";
echo $orden .
      "<br>-Cantidad: ". $cantidad .
      "<br>-Total M.N: $". $total;
echo "<br>";
echo "Gracias por tu compra.";
echo "<br>______________________";
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br>
<a href="#" class="btn btn-outline-danger btn-responsive btninter" >Enviar ticket de compra a tu correo electronico</a>
<br>
<a href="finalizar.php" class="btn btn-outline-success btn-responsive btninter" >Terminar</a>
<?php }
        else{
            header("Location: http://app-26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/componentes/home/home/menu/menuv.php");
        }