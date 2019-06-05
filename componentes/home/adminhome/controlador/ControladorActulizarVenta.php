<?php 
include_once 'conexion.php';
?>
<?php

$informacion = [];

$idventap=$_POST['numventap'];
$clientep= ($_POST['clientep']);
$tpizzap= $_POST['tpizzap'];
$cantidadp= $_POST['cantidadp'];
$totalp = $_POST['totalp'];
$estadop= $_POST['estadop'];



	
	$query=" UPDATE ventas SET  orden='$tpizzap',
	cantidad='$cantidadp', total='$totalp', estadopizza='$estadop' WHERE numVenta='$idventap'";
	$resultado= mysqli_query($conexion,$query);

	verificar_resultado($resultado);
	cerrar($conexion);


function verificar_resultado($resultado){
if (!$resultado) $informacion["respuesta"]="ERROR"; 
else $informacion["respuesta"]="BIEN";
echo json_encode($informacion);

}
function cerrar($conexion){
mysqli_close($conexion);

}
