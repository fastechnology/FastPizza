<?php
 require '../controlador/Conne.php';
 
$query="SELECT * FROM pizza";
$resultado = $con -> prepare($query);
	
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

?>
