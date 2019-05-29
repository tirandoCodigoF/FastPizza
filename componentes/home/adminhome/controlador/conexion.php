<?php
$db="pizzeria";
$host="localhost";
$pass="";
$user="root";
    $conexion = new mysqli($host,$user, $pass,$db);
    if($conexion->connect_errno){
        echo "Error al conectarse con la base de datos: ".$conexion->connect_error;
    }
    else{
    }
?>