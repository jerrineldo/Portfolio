<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

// require './vendor/phpmailer/phpmailer/src/Exception.php';
// require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require './vendor/phpmailer/phpmailer/src/SMTP.php';

function send_email($to_email, $to_name, $subject, $contact_email, $message)
{
    $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
    try {
        //Server settings
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure= 'tls';
        $mail->Port       = 587;
        $mail->Username   = 'mailerfordeveloper@gmail.com';
        $mail->Password   = '20212021#';

        //Recipients
        $mail->setFrom('jerrineldo.mp@gmail.com', 'Portfolio');
        $mail->addAddress($to_email, $to_name);

        $body ="";
        //Content
        $mail->Subject = $subject;
        $body.="Name : ".$to_name. "\r\n";
        $body.="Email: ".$contact_email. "\r\n";
        $body.="Message: ".$message."\r\n";

        $mail->Body    = $body;

        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}