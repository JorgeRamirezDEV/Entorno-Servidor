<?php
use PHPMailer\PHPMailer\PHPMailer;
require "PHPMailer.php";
require "Exception.php";
require "SMTP.php";
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'jorgeramirezinstituto@gmail.com';
$mail->Password = '';
$mail->setFrom('jorgeramirezinstituto@gmail.com', 'Jorge');
$mail->Subject = 'Correo de Prueba';
$mail->msgHTML('Prueba');
$mail->addAttachment('tragabuche.jpg');
$address = "pedro.cros.profe@gmail.com";
$mail->addAddress ($address,"Test");
//enviar
$resul = $mail->send();
if (!$resul){

    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'Enviado';
}
?>