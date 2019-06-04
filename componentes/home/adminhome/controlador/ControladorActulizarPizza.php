<?php 
include_once 'conexion.php';
?>
<?php

$informacion = [];

$codPizza=$_POST['codPizza1'];
$nombrep= ($_POST['nombrep1']);
$ingredientes= $_POST['ingredientes1'];
$tamano= $_POST['tamano1'];
$porcion= $_POST['porcion1'];
$precio= $_POST['precio1'];


	
	$query=" UPDATE pizza SET  tipo='$nombrep', ingredientes='$ingredientes',
	tamano='$tamano', porciones='$porcion', precio='$precio' WHERE codPizza='$codPizza'";
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
