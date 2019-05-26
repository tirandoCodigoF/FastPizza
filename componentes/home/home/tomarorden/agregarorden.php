<?php
include '../../../basededatos/conexion.php';

date_default_timezone_set('America/Mexico_City');
$Date = date('m/d/Y H:i:s');
$timestamp = time();
$cliente =$_POST['name'];
$tipodepizza =$_POST['pizza'];
$tamaño =$_POST['tam'];
$orden =$tipodepizza.$tamaño;
$cantidad =$_POST['cant'];
$total =$_POST['total'];
$estado =0;
    $sql=$conexion->query("INSERT into ventas (fecha, cliente,orden,cantidad,total,estado,nv) values
    ('$Date','$cliente','$orden',$cantidad,$total,$estado,$timestamp)");
    if($sql){
        session_start();
        $_SESSION['orden']=$timestamp;
        header("Location: orden.php");
    }
?>