<?php 
session_start();

if(isset($_SESSION['user'])) {
header("Location: componentes/login/controllogin.php");
}
else{
    header("Location: ");
}
?>