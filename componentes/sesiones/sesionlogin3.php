<?php
error_reporting(0);
session_start();
$session=$_SESSION['user'];
if ($session==""){
    header("Location: http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/");
}
else{
 header("Location: http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/componentes/home/home/menu/menuv.php");   
}
?>