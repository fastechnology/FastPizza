<?php
require '../../basededatos/conexion.php';
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$tipo=2;
$sql=$conexion->query("INSERT into clientes (usuario_cliente,email_cliente,pass_cliente,tipo_user) values
 ('$user','$email','$pass',$tipo)");
if($sql){
    session_start();
    $_SESSION['usuarioactual']=$user;
    $_SESSION['emailuseractual']=$email;
header("Location: ../../home/completardatospedido/index.php");
}
?>