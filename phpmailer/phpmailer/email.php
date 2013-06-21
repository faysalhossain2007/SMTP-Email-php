<?php
require("phpmailer/class.phpmailer.php");
$mail = new PHPMailer(); 
$mail->SMTPDebug = 1;
$mail->IsSMTP(); // send via SMTP

IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "optimize.developers@gmail.com"; // SMTP username
$mail->Password = "bangladeshisgreat"; // SMTP password
$webmaster_email = "optimize.developers@gmail.com"; //Reply to this email ID
$email="faysalhossain2007@gmail.com"; // Recipients email ID
$name="faysalhossain2007@gmail.com"; // Recipient's name
$mail->From = $webmaster_email;
$mail->FromName = "Webmaster";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Webmaster");
$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(true); // send as HTML
$mail->Subject = "This is the subject";
$mail->Body = "Hi,
This is the HTML BODY "; //HTML Body
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}
?>