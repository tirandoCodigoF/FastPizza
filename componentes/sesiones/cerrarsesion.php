<?php
function cierra_sesion() {
// Destruimos la cookie de sesión si existe
   if(isset($_COOKIE[session_name()])) {
     setcookie(session_name(),'',-4200,'/');
   }
   session_unset();   // Destruimos las variables de sesión
   session_destroy(); // Destruimos finalmente la información de la sesión
}

session_start();  // Iniciamos sesión
// Si se han declarado variables de sesión
if(count($_SESSION)>0)  {
  cierra_sesion();   // Cerramos la sesión y destruimos los datos
  $cerrada=true;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Destruir variables</title>
</head>

<body>
<?php
if(isset($cerrada)) {
  header("Location: ../../index.php");
} else {
  echo '<p>Todavía no se han creado las variables de sesión.</p>';	
}
?>
</body>
</html>