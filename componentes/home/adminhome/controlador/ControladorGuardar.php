<?php 
include_once 'Conne.php';
?>
<?php

	$informacion = [];
	$opcion=$_POST['opcion'];
    $idusuario=$_POST['idusuario2'];
	$email= ($_POST['email2']);
	$pass= ($_POST['pass2']);
	$nombre= $_POST['nombre2'];
	$telefono= $_POST['telefono2'];
	$direccion= $_POST['direccion2'];
	$fk_tipo= $_POST['priv2'];
	$activa=$_POST['activa2'];

	switch ($opcion) {
		case 'eliminar':
			eliminar ($idusuario,$email,$nombre,$telefono,$direccion,$fk_tipo,$activa,$con);
			break;
	//	default:
	//		echo "hola elige o eerror";
	//		break;
	}



	function eliminar ($idusuario,$email,$pass,$nombre,$telefono,$direccion,$fk_tipo,$activa,$con){
		
		$query=" DELETE FROM clientes WHERE nombre_cliente=:nombre,pass_cliente=:pass, direccion_cliente=:direccion, telefono_cliente=:telefono,
		 email_cliente=:email, tipo_user=:tipo, activacion=:activa, id=:idusuario";
		$upcliente = $con -> prepare($query);
	
	
		$upcliente-> bindParam(':nombre', $nombre, PDO::PARAM_STR);
		$upcliente-> bindParam(':direccion',$direccion , PDO::PARAM_STR);
		$upcliente -> bindParam(':telefono',$telefono , PDO::PARAM_STR);
		$upcliente-> bindParam(':email', $email, PDO::PARAM_STR);
		$upcliente-> bindParam(':pass1',$pass, PDO::PARAM_STR);
		$upcliente-> bindParam(':tipo',$fk_tipo, PDO::PARAM_INT);
		$upcliente-> bindParam(':activa',$activa, PDO::PARAM_INT);
		$upcliente-> bindParam(':idusuario',$idusuario, PDO::PARAM_INT);
		$upcliente->execute();
		verificar_resultado($upcliente);
		cerrar($con,$query);
	}
	/*function eliminar($idusuario,$con){
		$query=" DELETE *FROM clientes WHERE id=:idusuario";
		$upcliente = $con -> prepare($query);
		$upcliente-> bindParam(':idusuario',$idusuario, PDO::PARAM_INT);
		$upcliente->execute();
		verificar_resultado($upcliente);
		cerrar($con,$query);
	}
*/
	function verificar_resultado($upcliente){
if (!$upcliente) $informacion["respuesta"]="ERROR"; 
else $informacion["respuesta"]="BIEN";
echo json_encode($informacion);

	}
function cerrar($con,$query){
	//mysqli_close($con);
	$query=null;
    $con=null;

}

?>