<?php
require '../../basededatos/conexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

$email=$_POST['email'];
$pass=$_POST['pass1'];
$tipo=2;


$sql=$conexion->query("SELECT tipo_user from clientes where (email_cliente='$email') ");
    $filas=$sql->num_rows;
    if($filas>0){
        header("Location: ../errorregistro.php");
    }
    else{
$sql=$conexion->query("INSERT into clientes (email_cliente,pass_cliente,tipo_user) values
('$email','$pass',$tipo)");
if($sql){
    $mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'fastechnology99@gmail.com';                     // SMTP username
    $mail->Password   = 'Tecnologia2019';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('fastechnology99@gmail.com', 'Star-Soft');
    $mail->addAddress($email);     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Star-Soft Registro.';
    $mail->Body    = 'Te haz registrado exitosamente en Star-Soft. Ahora solo queda activar tu cuenta haciendo click
    en el siguiente enlace http://localhost/fastpizza/componentes/login/activarcuenta.php';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: ../../../activar.php");
} 
    }
    ?>