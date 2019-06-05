<?php
$db="bzxlwzvexbaiqu1sypi9";
$host="bzxlwzvexbaiqu1sypi9-mysql.services.clever-cloud.com";
$pass="Od6JyCvE855NKM4JfVwv";
$user="u1htrxt785hqk9gr";
    $conexion = new mysqli($host,$user, $pass,$db);
    if($conexion->connect_errno){
        echo "Error al conectarse con la base de datos: ".$conexion->connect_error;
    }
    else{
    }
?>