<?php
require '../basededatos/conexion.php';


session_start();

if(isset($_SESSION['user'])) {
    $email=$_SESSION['user'];
    $pass=$_SESSION['pass'];
    $sql=$conexion->query("SELECT tipo_user from clientes where (email_cliente='$email' and pass_cliente='$pass') ");
    $filas=$sql->num_rows;
    if($filas>0){
        session_start();
        $_SESSION['user']=$email;
        $_SESSION['pass']=$pass;
        header("Location: controlusuarios.php");
    }
}
else{
$email=$_POST['user'];
$pass=$_POST['pass'];
$sql=$conexion->query("SELECT tipo_user from clientes where (email_cliente='$email' and pass_cliente='$pass') ");
$filas=$sql->num_rows;
if($filas>0){
    session_start();
    $_SESSION['user']=$email;
    $_SESSION['pass']=$pass;
    header("Location: controlusuarios.php");
}
else{
    header("Location: ../../errorlogin.php");
}
}

