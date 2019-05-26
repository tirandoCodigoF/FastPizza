<?php 
session_start();

if($_SESSION!=null){
    header("Location: http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/componentes/login/controllogin.php");
}
else{
    header("Location: http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/");
}
?>