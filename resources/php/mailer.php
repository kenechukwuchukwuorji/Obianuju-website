<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'C:/xampp/composer/vendor/autoload.php';

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



// passing true in constructor enables exceptions in PHPMailer
// require 'class.phpmailer.php';
 
$yahoo_mail = new PHPMailer;
 
$yahoo_mail->IsSMTP();
// Send email using Yahoo SMTP server
$yahoo_mail->Host = 'smtp.mail.yahoo.com';
// port for Send email
$yahoo_mail->Port = 465;
$yahoo_mail->SMTPSecure = 'ssl';
$yahoo_mail->SMTPDebug = 1;
$yahoo_mail->SMTPAuth = true;
$yahoo_mail->Username = 'kenechukwuchukwuorji@Yahoo.com';
$yahoo_mail->Password = 'tmbfshpuvqsuupft';
 
$yahoo_mail->From = 'kenechukwuchukwuorji@Yahoo.com';
$yahoo_mail->FromName = 'Kenechukwu Chukwuorji';// frome name
$yahoo_mail->AddAddress('kenechukwuchukwuorji@gmail.com', 'To Name');  // Add a recipient  to name
$yahoo_mail->AddAddress('kenechukwuchukwuorji@Yahoo.com');  // Name is optional
 
$yahoo_mail->IsHTML(true); // Set email format to HTML
 
$yahoo_mail->Subject = 'Here is the subject for onlinecode';
$yahoo_mail->Body    = 'Send email using Yahoo SMTP server <br>This is the HTML message body <strong>in bold!</strong> <a href="https://onlinecode.org/" target="_blank">onlincode.org</a>';
$yahoo_mail->AltBody = 'This is the body in plain text for non-HTML mail clients at https://onlinecode.org/';
 
if(!$yahoo_mail->Send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $yahoo_mail->ErrorInfo;
exit;
}
else
{
echo 'Message of Send email using Yahoo SMTP server has been sent';
}
?>