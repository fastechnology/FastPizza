<?php
$db="bclaaawucbhptfb3nth1";
$host="bclaaawucbhptfb3nth1-mysql.services.clever-cloud.com";
$pass="owxPBGYDFzI2dtam3AXp";
$user="uw38l52oqjtgwx5m";
    $conexion = new mysqli($host,$user, $pass,$db);
    if($conexion->connect_errno){
        echo "Error al conectarse con la base de datos: ".$conexion->connect_error;
    }
    else{
    }
?>