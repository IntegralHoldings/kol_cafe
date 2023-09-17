<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "vendor/autoload.php";

$mail = new PHPMailer(true);


    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail-> isSMTP();
$mail-> SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail-> Username = "integralhld@gmail.com";
$mail-> Password = "dcrzqolctfkphgzw";

$mail->setFrom($email, $name);
$mail->addAddress("ktmatjila@gmail.com", "Koketso");

$mail->Body = $message;

$mail->send();

echo "email sent";


