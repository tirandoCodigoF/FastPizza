<?php
session_start();


$usuarioactual=$_SESSION['user'];
$sql=$conexion->query("SELECT *from clientes where email_cliente='$usuarioactual' ");
$filas=$sql->num_rows;
if($sql){
while($fila=$sql->fetch_assoc()){
    $id=$fila['id'];
    $nombre=$fila['nombre_cliente'];
    $direccion=$fila['direccion_cliente'];
    $telefono=$fila['telefono_cliente'];
    $email=$fila['email_cliente'];
}
}
?>