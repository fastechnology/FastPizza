<?php 
require 'Conne.php';

	$array_devolver=[];
	$codPizza= $_POST['codPizza'];
	$nombrep= $_POST['nombrep'];
	$ingredientes=$_POST['ingredientes'];
	$tamano= $_POST['tamano'];
	$porcion= $_POST['porcion'];
	$precio= $_POST['precio'];
	

	
	
	$query="INSERT INTO pizza (codPizza, tipo, ingredientes, tamano, porciones, precio) VALUES ('$codPizza', '$nombrep', '$ingredientes','$tamano' ,'$porcion', '$precio')";

	$nusuario = $con->prepare($query);
	
	
 			$nusuario -> execute();

 			$user_id = $con->lastInsertId();
             $_SESSION['id'] = (int) $user_id;
            // $array_devolver['redirect'] = 'http://app-26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/FastPizza/componentes/home/adminhome/MenuAdmin/listaPizza.php';
		
			 $array_devolver['full3']=true;
			 $array_devolver['is_login3'] = true;
			 $array_devolver['Registro exitoso3']= true;


echo json_encode($array_devolver);
	 

 ?>