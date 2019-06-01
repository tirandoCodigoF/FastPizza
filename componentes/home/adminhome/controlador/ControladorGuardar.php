<?php 
include_once 'Conne.php';
?>
<?php

	$informacion = [];
	$opcion=$_POST['opcion'];
    $idusuario=$_POST['idusuario'];
	$email= ($_POST['email1']);
	$nombre= $_POST['nombre1'];
	$telefono= $_POST['telefono1'];
	$direccion= $_POST['direccion1'];
	$fk_tipo= $_POST['priv1'];
	$activa=$_POST['activa1'];

	switch ($opcion) {
		case 'modificar':
			modificar ($idusuario,$email,$nombre,$telefono,$direccion,$fk_tipo,$activa,$con);
			break;

			case 'eliminar':
			eliminar($idusuario,$con);
				break;
		default:
			echo "hola elige o eerror";
			break;
	}












	function modificar ($idusuario,$email,$nombre,$telefono,$direccion,$fk_tipo,$activa,$con){
		
		$query=" UPDATE clientes SET nombre_cliente=:nombre, direccion_cliente=:direccion, telefono_cliente=:telefono,
		 email_cliente=:email, tipo_user=:tipo, activacion=:activa WHERE id=:idusuario";
		$upcliente = $con -> prepare($query);
	
	
		$upcliente-> bindParam(':nombre', $nombre, PDO::PARAM_STR);
		$upcliente-> bindParam(':direccion',$direccion , PDO::PARAM_STR);
		$upcliente -> bindParam(':telefono',$telefono , PDO::PARAM_STR);
		$upcliente-> bindParam(':email', $email, PDO::PARAM_STR);
		$upcliente-> bindParam(':tipo',$fk_tipo, PDO::PARAM_INT);
		$upcliente-> bindParam(':activa',$activa, PDO::PARAM_INT);
		$upcliente-> bindParam(':idusuario',$idusuario, PDO::PARAM_INT);
		$upcliente->execute();
		verificar_resultado($upcliente);
		cerrar($con,$query);
	}
	function eliminar($idusuario,$con){
		$query=" DELETE *FROM clientes WHERE id=:idusuario";
		$upcliente = $con -> prepare($query);
		$upcliente-> bindParam(':idusuario',$idusuario, PDO::PARAM_INT);
		$upcliente->execute();
		verificar_resultado($upcliente);
		cerrar($con,$query);
	}

	function verificar_resultado($upcliente){
if (!$upcliente) $informacion["respuesta"]="ERROR"; 
else $informacion["respuesta"]="BIEN";
echo json_encode($informacion);

	}
function cerrar($con,$query){
	mysqli_close($con);
	$query=null;
    $con=null;

}

?>