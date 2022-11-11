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
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'sudo.mailer.okay@gmail.com'; //SMTP username
    $mail->Password = 'ivmltdppbyilxgyt'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->setFrom('sudo.mailer.okay@gmail.com', 'Mailer');
    $mail->addAddress($email); //Name is optional

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = $body;

    $mail->send();
    echo 'Message has been sent';
}
catch(Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

