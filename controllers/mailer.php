<?php
require_once __DIR__ . './../dependency/phpmailer/src/Exception.php';
require_once __DIR__ . './../dependency/phpmailer/src/PHPMailer.php';
require_once __DIR__ . './../dependency/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try
{
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = SMTP_HOST; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = SMTP_USERNAME; //SMTP username
    $mail->Password = SMTP_PASSWORD; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = SMTP_PORT; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->setFrom(SMTP_FROM, 'NO-REPLY');
    $mail->addAddress($_POST["email"]);
    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = "Email verification";
    $mail->Body = $body;

    $mail->send();
    echo 'Message has been sent';
}
catch(Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

