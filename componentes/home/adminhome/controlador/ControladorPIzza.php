<?php
 require '../controlador/Conne.php';
 
$arreglo = [];

$query="SELECT * FROM pizza";
$resultado = $con -> prepare($query);
	//$resultado2->bindParam(':ti_user',$un,PDO::PARAM_INT);
    $resultado->execute();
    if (!$resultado) {
        //existe
        echo "error";
             
    }else{
        while( $data = $resultado->fetch(PDO::FETCH_ASSOC)){
            $arreglo["data"][]=$data;
           }
           echo json_encode($arreglo);
       
    }
    
    $query=null;
    $con=null;

?>
