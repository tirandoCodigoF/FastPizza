<?php
include '../../../basededatos/conexion.php';

$pizza=$_SESSION['orden'];
$sql=$conexion->query(" SELECT *from ventas where nv=$pizza ");
if($sql){
while($fila=$sql->fetch_assoc()){
    $fecha=$fila['fecha'];
    $cliente=$fila['cliente'];
    $orden=$fila['orden'];
    $cantidad=$fila['cantidad'];
    $total=$fila['total'];
}
}
?>