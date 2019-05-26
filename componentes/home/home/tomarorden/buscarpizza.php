<?php
require '../../../basededatos/conexion.php';
include '../../../sesiones/datosuser.php';

date_default_timezone_set('America/Mexico_City');
$Date = date('m/d/Y H:i:s A');
$timestamp = time();
$Date2=date('m/d/Y 22:00:00 A');
$Date3=date('m/d/Y 09:00:00 A');
if ($Date<=$Date2 && $Date>=$Date3){

$pizzaelegida=$_POST['tam'];
$cantidad=$_POST['cant'];
$sql=$conexion->query("SELECT *from pizza where codPizza='$pizzaelegida' ");
$filas=$sql->num_rows;
if($sql){
while($fila=$sql->fetch_assoc()){
    $ingredientes=$fila['ingredientes'];
    $tamaño=$fila['tamano'];
    $tipo=$fila['tipo'];
    $porciones=$fila['porciones'];
    $precio=$fila['precio'];
    $total=$precio*$cantidad;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../../css/login/login.css">
    <title>Document</title>
</head>
<body>
<div class="padre">
    <div class="hijo">
<form action="agregarorden.php" method="POST">
<label for="">Tipo de Pizza:</label>
<input type="text" class="form-control" name="pizza" id="pizza" value="<?php  echo $tipo;?>" readonly="readonly">
<label for="">Tamaño:</label>
<input type="text" class="form-control" name="tam" id="tam" value="<?php  echo $tamaño;?>" readonly="readonly">
<label for="">Ingredientes:</label>
<input type="text" class="form-control" name="ingredientes" id="ingredientes" value="<?php  echo $ingredientes;?>" readonly="readonly">
<label for="">Cantidad:</label>
<input type="number" class="form-control" name="cant" id="cant" value="<?php  echo $cantidad;?>" readonly="readonly"readonly="readonly">
<label for="">Total:</label>
<input type="number" class="form-control"class="form-control" name="total" id="total" value="<?php  echo $total;?>" readonly="readonly">
<label for="">Nombre:</label>
<input type="text" class="form-control" name="name" id="name" value="<?php  echo $nombre;?>">
<label for="">Direccion:</label>
<input type="text" class="form-control" name="direccion" id="direccion" value="<?php  echo $direccion;?>">
<label for="">Numero de contacto:</label>
<input type="number" class="form-control" name="numero" id="numero" value="<?php  echo $telefono;?>">
<button type="submit" class="btn btn-outline-success">Confirmar compra</button>
</form>
</div>
</div>
</body>
</html>
<?php }
else{
    header("Location: ../menu/tiendacerrada.php");
}?>
<!--BUSCAR UBICACION
<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
-->