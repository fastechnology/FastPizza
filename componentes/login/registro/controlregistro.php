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
        $sql2=$conexion->query("INSERT into clientes values (null,'$nombre','$direccion',$phone,'$email','$pass',$tipo,$activacion)");
if($sql2){
    $mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'fastechnology99@gmail.com';                     // SMTP username
    $mail->Password   = 'Tecnologia2019';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('fastechnology99@gmail.com', 'Star-Soft');
    $mail->addAddress($email);     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Star-Soft Registro.';
    $mail->Body    = 'Gracias por registrarte';
    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: ../../../index.php");
}
else { 
    echo "No se ha podido conectar con el servidor, ".'<a href="../../../index.php">Reintentar</a>';   }
    ?>