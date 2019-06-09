<?php
 require '../controlador/Conne.php';
 
$query="SELECT * FROM pizza ORDER BY idPizza desc;";
$resultado2 = $con -> prepare($query);
	
    $resultado2->execute();
    if (!$resultado2) {
        //existe
        echo "error";
             
    }else{
        while( $data = $resultado2->fetch(PDO::FETCH_ASSOC)){
            $arreglo["data"][]=$data;
           }
           echo json_encode($arreglo);
           echo"bien";
       
    }
    
    $query=null;
    $con=null;

?>
