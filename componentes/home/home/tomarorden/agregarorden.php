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
$fpag=$_POST['fpag'];
$estado =0;
echo $fpag;
    $sql=$conexion->query("INSERT into ventas (fecha, cliente,orden,cantidad,total,estado,nv,tipo_venta) values
    ('$Date','$cliente','$orden',$cantidad,$total,$estado,$timestamp,'$fpag')");
    if($sql){
        session_start();
        $_SESSION['orden']=$timestamp;
        if($fpag=='t'){
        header("Location: orden.php");
        }
        if($fpag=='e'){
            $sql1=$conexion->query("UPDATE ventas set estado=1 where nv=$timestamp ");
            header("Location: ../menu/menuv.php");
        }
    }
?>