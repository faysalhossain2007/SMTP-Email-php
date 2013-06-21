<?php

require("phpmailer/class.phpmailer.php");

//Before using this be sure to enable your smtp
//It fails if you are using your gmail account and there is two step verificaiton activated

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host     = "ssl://smtp.gmail.com";
    $mail->Port     = 465;//if you are going to use tls then port will be changed and for localhost it will be 25
    $mail->Username = "";//Your Email from where you want to send email
    $mail->Password = "";//Your Email Password
    $mail->FromName = "";//Your Name
    $mail->Subject  = "";//Subject of the mail
    $mail->Body     = "";//Body of the mail
    $mail->AddAddress('');//Receipent Email address to whom you want to give email
    if(!$mail->Send()){
        echo "Mailer Error: " . $mail->ErrorInfo;//if the email is not send then it will send error
    }else{
        echo "Message has been sent";//If the message is sent successfully you will see this message in your browser
    }
?>