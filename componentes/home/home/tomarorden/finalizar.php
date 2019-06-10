<?php
session_start();
$_SESSION['orden']=null;
header('Location: ../../../login/controlusuarios.php');
?>