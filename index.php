<?php
require_once "mail.php";

try {
        $mail->addAddress('to@example.com');     //Add a recipient email address
        //Message Content
        $mail->Subject = 'Tester';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->send();
        echo 'Message has been sent';
} catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>