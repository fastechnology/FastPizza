<?php
error_reporting(0);
session_start();
$session=$_SESSION['user'];
if ($session==""){
    header("Location: http://app-26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/");
}
else{
 header("Location: http://app-26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/componentes/home/home/tomarorden/buscarpizzasuc.php");   
}
?>