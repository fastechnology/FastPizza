<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../basededatos/conexion.php';
require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

$email=$_POST['email'];
$pass=$_POST['pass2'];
$tipo=2;
$nombre=$_POST['name'];
$direccion=$_POST['direccion'];
$phone=$_POST['phone'];
$activacion=1;

$sql=$conexion->query("SELECT *from clientes where (email_cliente='$email') ");
    $filas=$sql->num_rows;
    if($filas>0){
        header("Location: ../errorregistro.php");
    }
    else{
        echo "hola";
    }
?>