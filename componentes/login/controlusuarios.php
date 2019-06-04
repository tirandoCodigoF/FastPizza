<?php
require '../basededatos/conexion.php';
session_start();
$email=$_SESSION['user'];
$pass=$_SESSION['pass'];

$sql=$conexion->query("SELECT tipo_user,activacion from clientes where (email_cliente='$email' and pass_cliente='$pass') ");
$filas=$sql->num_rows;
if($sql){
while($fila=$sql->fetch_assoc()){
    $tipo=$fila['tipo_user'];
    $estado=$fila['activacion'];
}
if($tipo==1 && $estado==1){
    session_start();
    $_SESSION['user']=$email;
  header("Location: ../home/adminhome/adminhome.php");
}
if($tipo==2 && $estado==1){
    session_start();
    $_SESSION['user']=$email;
    header("Location: ../home/home/menu/index.php");
}
if ($tipo==2 && $estado==0){
    $_SESSION['user']=null;
        header("Location: ../../activacionerror.php");
    }
if ($tipo==3){
        $_SESSION['user']=$email;
            header("Location: ../home/home/menu/menuv.php");
        }
}   