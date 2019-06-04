<?php 
require 'Conne.php';
//require '../../../basededatos/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	header("Content-Type: application/json");
	$array_devolver=[];
	$eliminarventa= $_POST['eliminarventa'];
	
	
            $query = "DELETE  FROM ventas WHERE numVenta =:Eliminar";
            $nusuario = $con->prepare($query);
            $nusuario->bindParam(':Eliminar',$eliminarventa,PDO::PARAM_INT);
	
	
 			$nusuario -> execute();

 			$user_id = $con->lastInsertId();
 			$_SESSION['id'] = (int) $user_id;

			 $array_devolver['full5']=true;
			 $array_devolver['is_login5'] = true;
			 $array_devolver['Venta_Eliminada_exitosamente']= true;



echo json_encode($array_devolver);
}else{
	exit("fuera del registro");
}

		 

 ?>