<?php 
session_start();

if($_SESSION!=null){
    header("Location: http://app_26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/componentes/login/controllogin.php");
}
else{
    header("Location: http://app_26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/");
}
?>