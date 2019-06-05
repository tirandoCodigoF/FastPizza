<?php 
require 'Conne.php';
//require '../../../basededatos/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	header("Content-Type: application/json");
	$array_devolver=[];
	$eliminaruser= ($_POST['eliminaruser']);
/*
	//comprobar si existe el usuario
	$query=" SELECT * FROM clientes WHERE id=:id LIMIT 1";
	$resultado = $con -> prepare($query);
	$resultado->bindParam(':id',$eliminaruser,PDO::PARAM_INT);
	$resultado->execute();

	si hay regsitro en la bdd
	if ($resultado->rowCount() == 1) {
		$array_devolver['error1']="ya no existe en la bdd";
		$array_devolver['is_login2']=false;
		}
		else{*/
	
            $query = "DELETE  FROM clientes WHERE id =:idEliminar";
            $nusuario = $con->prepare($query);
            $nusuario->bindParam(':idEliminar',$eliminaruser,PDO::PARAM_INT);
	
	
 			$nusuario -> execute();

 			$user_id = $con->lastInsertId();
 			$_SESSION['id'] = (int) $user_id;

			 $array_devolver['full2']=true;
			 $array_devolver['is_login2'] = true;
			 $array_devolver['Alta exitosa2']= true;



echo json_encode($array_devolver);
}else{
	exit("fuera del registro");
}

		 

 ?>