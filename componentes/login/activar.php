<?php
require '../basededatos/conexion.php';


$user=$_POST['user'];

$nombre=$_POST['name'];
$direccion=$_POST['dir'];
$telefono=$_POST['tel'];
$activar=1;

    $sql1=$conexion->query("UPDATE clientes set activacion='$activar',nombre_cliente='$nombre',
    direccion_cliente='$direccion', telefono_cliente=$telefono where email_cliente='$user' ");

   $sql=$conexion->query("SELECT tipo_user from clientes where (email_cliente='$user') ");
    $filas=$sql->num_rows;
    if($filas>0){
        session_start();
        $_SESSION['user']=$user;
        header("Location: controlusuarios.php");
    }
else{
    header("Location: errorlogin.php");
}
