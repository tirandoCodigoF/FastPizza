<?php 
include_once 'conexion.php';
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
		modificar ($idusuario,$email,$nombre,$telefono,$direccion,$fk_tipo,$activa,$conexion);
		break;
		case 'eliminar':
		eliminar($idusuario,$conexion);
		break;
	
}

function modificar ($idusuario,$email,$nombre,$telefono,$direccion,$fk_tipo,$activa,$conexion){
		
	$query=" UPDATE clientes SET nombre_cliente='$nombre', direccion_cliente='$direccion', telefono_cliente='$telefono',
	 email_cliente='$email', tipo_user='$fk_tipo', activacion='$activa' WHERE id='$idusuario'";
	$resultado= mysqli_query($conexion,$query);

	verificar_resultado($resultado);
	cerrar($conexion);
}
function eliminar($idusuario, $conexion){
	$query = "UPDATE clientes SET estado = 0 WHERE id ='$idusuario'";
	$resultado = mysqli_query($conexion, $query);
	verificar_resultado( $resultado );
	cerrar( $conexion );
	}
	

function verificar_resultado($resultado){
if (!$resultado) $informacion["respuesta"]="ERROR"; 
else $informacion["respuesta"]="BIEN";
echo json_encode($informacion);

}
function cerrar($conexion){
mysqli_close($conexion);

}
