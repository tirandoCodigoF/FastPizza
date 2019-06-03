<?php 
require 'Conne.php';
//require '../../../basededatos/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	header("Content-Type: application/json");
	$array_devolver=[];
	$idcliente= ($_POST['idcliente']);
	$activarcuenta=$_POST['activarcuenta'];

	//comprobar si existe el usuario
	$query=" SELECT * FROM clientes WHERE id=:id LIMIT 1";
	$resultado = $con -> prepare($query);
	$resultado->bindParam(':id',$idcliente,PDO::PARAM_INT);
	$resultado->execute();

	//si hay regsitro en la bdd
	if ($resultado->rowCount() != 1) {
		$array_devolver['error1']="no se ha elegido cliente";
		$array_devolver['is_login1']=false;
		}
		else{
	
            $query = "UPDATE clientes SET estado = :activa WHERE id =:idcliente";
    $nusuario = $con->prepare($query);
    $nusuario->bindParam(':idcliente',$idcliente,PDO::PARAM_INT);
	$nusuario -> bindParam(':activa',$activarcuenta, PDO::PARAM_INT);
	
 			$nusuario -> execute();

 			$user_id = $con->lastInsertId();
 			$_SESSION['id'] = (int) $user_id;

			 $array_devolver['full1']=true;
			 $array_devolver['is_login1'] = true;
			 $array_devolver['Alta exitosa1']= true;


}
echo json_encode($array_devolver);
}else{
	exit("fuera del registro");
}

		 

 ?>