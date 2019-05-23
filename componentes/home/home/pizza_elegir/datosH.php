<?php
include '../../basededatos/conexion.php';

$Hawaiana=1;



$sql=$conexion->query("SELECT *from pizza where codPizza=$Hawaiana ");
if($sql){
while($fila=$sql->fetch_assoc()){
    
}
}
?>