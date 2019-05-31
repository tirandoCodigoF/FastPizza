<?php
$db="b4cclr8mz6enuymcjuik";
$host="b4cclr8mz6enuymcjuik-mysql.services.clever-cloud.com";
$pass="Od6JyCvE855NKM4JfVwv";
$user="Ga1IvlnpTE1vVk9xtA0F";
    $conexion = new mysqli($host,$user, $pass,$db);
    if($conexion->connect_errno){
        echo "Error al conectarse con la base de datos: ".$conexion->connect_error;
    }
    else{
    }
?>