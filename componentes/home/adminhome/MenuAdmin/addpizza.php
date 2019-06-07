<?php
require '../../../basededatos/conexion.php';
$codPizza=$_POST['codPizza'];
$nombre=$_POST['nombrep'];
$ingredientes=$_POST['ingredientes'];
$tam=$_POST['tamano'];
$porciones=$_POST['porcion'];
$precio=$_POST['precio'];
$img=$_POST['img'];
$sql=$conexion->query("INSERT INTO pizza (codPizza,tipo,ingredientes,tamano,porciones,precio,img) 
values('$codPizza','$nombre','$ingredientes','$tam',$porciones,$precio,'$img') ");
header("Location: http://app-26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/componentes/home/adminhome/MenuAdmin/listaPizza.php");
?>