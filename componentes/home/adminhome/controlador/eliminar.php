<?php 
include_once 'Conne.php';

$idusuario1= $_POST['idusuario1'];
$query="DELETE FROM clientes WHERE id=:id";

$resultado= $con -> prepare($query);
$resultado->bindParam(':id',$idusuario1, PDO::PARAM_INT);
$resultado->execute();
$mensaje = "Se ha Eliminado un libro";
echo "<script>";
echo "alert('$mensaje');";  
echo "window.location = '#';";
echo "</script>"; 

 ?>