<?php 
require 'Conne.php';

	$array_devolver=[];
	$codPizza= $_POST['codPizza'];
	$nombrep= $_POST['nombrep'];
	$ingredientes=$_POST['ingredientes'];
	$tamano= $_POST['tamano'];
	$porcion= $_POST['porcion'];
	$precio= $_POST['precio'];
	$imagen= $_POST['imagen'];

	

	//comprobar si existe el usuario
	$query=" SELECT * FROM pizza WHERE tipo=:nombrep AND tamano=:tamano AND porciones=:porcion LIMIT 1";
	$resultado = $con -> prepare($query);
    $resultado->bindParam(':nombrep',$nombrep,PDO::PARAM_STR);
    $resultado->bindParam(':tamano',$tamano,PDO::PARAM_STR);
    $resultado->bindParam(':porcion',$porcion,PDO::PARAM_INT);
	$resultado->execute();

	$query2=" SELECT * FROM pizza WHERE codPizza =:codPizza LIMIT 1";
	$resultado2 = $con -> prepare($query2);
	$resultado2->bindParam(':codPizza',$codPizza,PDO::PARAM_STR);
	$resultado2->execute();
	//si hay regsitro en la bdd
	if ($resultado->rowCount() == 1) {
		$array_devolver['error3']="La pizza ya existe...!!!";
		$array_devolver['is_login3']=false;
		}elseif ($resultado2->rowCount() == 1) {
			$array_devolver['error3']="el codigo de la pizza ya existe.. intenta con otro..!!!";
			$array_devolver['is_login3']=false;
		}
		else{
	
	$query="INSERT INTO pizza (codPizza, tipo, ingredientes, tamano, porciones, precio, img) VALUES ('$codPizza', '$nombrep', '$ingredientes','$tamano' ,'$porcion', '$precio', '$imagen')";

	$nusuario = $con->prepare($query);
	
	
 			$nusuario -> execute();

 			$user_id = $con->lastInsertId();
             $_SESSION['id'] = (int) $user_id;
			 $array_devolver['full3']=true;
			 $array_devolver['is_login3'] = true;
			 $array_devolver['Registro exitoso3']= true;

}
echo json_encode($array_devolver);
	 

 ?>