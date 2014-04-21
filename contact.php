<?php
require 'include/phpmailer/PHPMailerAutoload.php';

var_dump($_POST);

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp-mail.outlook.com';      // Specify main and backup server
$mail->port = 25;
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->SMTPDebug = 2;                       // debugging: 1 = errors and messages, 2 = messages only
$mail->Username = 'OUTLOOK';                // SMTP username
$mail->Password = 'PASSWORD';               // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable encryption, 'ssl' also accepted

$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];
$mail->addAddress('geoff.spink@gmail.com', 'Geoff Spink');  // Add a recipient

$mail->WordWrap = 50;                        // Set word wrap to 50 characters
$mail->Subject = 'Message from your website';
$mail->Body    = $_POST['message'];

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
