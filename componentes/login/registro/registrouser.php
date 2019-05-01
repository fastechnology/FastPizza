<?php
require 'https://github.com/fastechnology/FastPizza/blob/81cde2121a89c676408e88f8c6433a3806188e17/componentes/conexion.php';
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