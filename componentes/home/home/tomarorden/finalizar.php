<?php
session_start();
$_SESSION['orden']=null;
header('Location: ../menu/pizzas.php');
?>