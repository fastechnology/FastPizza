<?php
require '../../basededatos/conexion.php';
session_start();
$email=$_SESSION['emailuseractual'];
$nombre_cliente=$_POST['name'];
$direccion_cliente=$_POST['direccion'];
$telefono_cliente=$_POST['telefono'];
$sql=$conexion->query("UPDATE clientes set nombre_cliente='$nombre_cliente', direccion_cliente='$direccion_cliente',
telefono_cliente='$telefono_cliente' where email_cliente='$email' ");
if($sql){
    header("Location: ../home/index.html");
}
?>