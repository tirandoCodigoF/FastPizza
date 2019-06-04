<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../../../../css/login/login.css">
<link rel="stylesheet" type="text/css" href="../../../../css/menu.css">
<title>Tomar Orden</title>
</head>
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
<body>
<?php
require ('../../../navbar/index.php');
?>
<div class="padre">
    <img src="https://media.giphy.com/media/JpvgoRFviSTHgpFcex/giphy.gif"  >
<div class="hijo">
<form action="agregarorden.php" method="POST">
<div class="form-group row">
<div class="col-sm-6">
<label for="">Tipo de Pizza:</label>
<input type="text" class="form-control" name="pizza" id="pizza" value="<?php  echo $tipo;?>" readonly="readonly">
</div>
<div class="col-sm-6">
<label for="">Tamaño:</label>
<input type="text" class="form-control input-sm" name="tam" id="tam" value="<?php  echo $tamaño;?>" readonly="readonly">
</div>
<div class="col-sm-6">
<label for="">Ingredientes:</label>
<input type="text" class="form-control" name="ingredientes" id="ingredientes" value="<?php  echo $ingredientes;?>" readonly="readonly">
</div>
<div class="col-sm-6">
<label for="">Cantidad:</label>
<input type="number" class="form-control" name="cant" id="cant" value="<?php  echo $cantidad;?>" readonly="readonly"readonly="readonly">
</div>
<div class="col-sm-6">
<label for="">Total a pagar:</label>
<input type="number" class="form-control"class="form-control" name="total" id="total" value="<?php  echo $total;?>" readonly="readonly">
</div>
<div class="col-sm-6">
<label for="">Nombre:</label>
<input type="text" class="form-control" name="name" id="name" value="<?php  echo $nombre;?>">
</div>
<div class="col-sm-6">
<label for="">Direccion:</label>
<input type="text" class="form-control" name="direccion" id="direccion" value="<?php  echo $direccion;?>">
</div>
<div class="col-sm-6">
<label for="">Numero de contacto:</label>
<input type="number" class="form-control" name="numero" id="numero" value="<?php  echo $telefono;?>">
</div>
<div class="col-sm-6">
<label for="">Forma de pago:</label>
<select class="custom-select mr-sm-2" name="fpag" id="fpag">
            <option value="t">Tarjeta de crédito/débito</option>
            <option value="e">Efectivo</option>
            </select>
</div>
<div class="btnsc">
<br>
<button type="submit" class="btn btn-outline-success btn-responsive btninter">Confirmar</button>
<a href="../menu/pizzas.php" class="btn btn-outline-danger btn-responsive btninter">Cancelar</a>
</div>
</form>
</div>
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