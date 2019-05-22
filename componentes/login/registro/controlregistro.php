<?php
require '../../basededatos/conexion.php';

$user=$_POST['user'];
$pass=$_POST['pass1'];
$email=$_POST['email'];
$tipo=2;
$sql=$conexion->query("SELECT tipo_user from clientes where (email_cliente='$email') ");
    $filas=$sql->num_rows;
    if($filas>0){
        header("Location: ../errorregistro.php");
    }
    else{
$sql=$conexion->query("INSERT into clientes (usuario_cliente,email_cliente,pass_cliente,tipo_user) values
('$user','$email','$pass',$tipo)");
if($sql){
    session_start();
    $_SESSION['usuarioactual']=$user;
    $_SESSION['emailuseractual']=$email;
header("Location: ../../home/completardatospedido/index.php");
} 
    }
?>