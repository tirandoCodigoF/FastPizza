<?php
error_reporting(0);
session_start();
$session=$_SESSION['user'];
if ($session==""){
    header("Location: ");
}
else{
    header("Location: componentes/home/home/menu/index.php");
}
?>