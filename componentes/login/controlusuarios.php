<?php
require '../basededatos/conexion.php';
session_start();
$email=$_SESSION['user'];

$sql=$conexion->query("SELECT tipo_user,activacion from clientes where (email_cliente='$email') ");
$filas=$sql->num_rows;
if($sql){
while($fila=$sql->fetch_assoc()){
    $tipo=$fila['tipo_user'];
    $estado=$fila['activacion'];
}
if($tipo==1 && $estado==1){
    session_start();
    $_SESSION['useractual']=$email;
  header("Location: ../home/adminhome/adminhome.php");
}
if($tipo==2 && $estado==1){
    session_start();
    $_SESSION['useractual']=$email;
    header("Location: ../home/home/index.php");
}
if ($tipo==2 && $estado==0){
        header("Location: ../../activacionerror.php");
    }
}   