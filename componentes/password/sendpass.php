<?php
require '../basededatos/conexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../login/registro/mailer/Exception.php';
require '../login/registro/mailer/PHPMailer.php';
require '../login/registro/mailer/SMTP.php';

$email=$_POST['email'];
$sql=$conexion->query("SELECT pass_cliente from clientes where (email_cliente='$email') ");
$filas=$sql->num_rows;
if($sql){
while($fila=$sql->fetch_assoc()){
    $pass=$fila['pass_cliente'];
}
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
    $mail->Subject = 'Star-Soft: Recuperacion contraseña.';
    $mail->Body    = 'Tus datos para iniciar sesion en: http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/ 
    son los siguientes: '. 'Email: ' . $email . 'Contraseña: ' . $pass;
    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/");
}
