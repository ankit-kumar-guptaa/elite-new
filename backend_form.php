<?php

// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['web'];
    $message = $_POST['message'];
    $service = $_POST['service'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'rajiv@greencarcarpool.com';               // SMTP username
        $mail->Password   = 'Rajiv@111@';                        // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('rajiv@greencarcarpool.com', 'Elite Corporate Solutions');
        $mail->addAddress('Rajiv@elitecorporatesolutions.com', 'Rajiv');     // Add a recipient

        // Content
        $mail->isHTML(false);                                  // Set email format to plain text
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body    = "Name: $name\nPhone: $phone\nEmail: $email\nService: $service\nMessage: $message";

        $mail->send();
        

        header('Location: thankyou.php');
        exit();


    } catch (Exception $e) {
        echo "Email sending failed. Mailer Error: {$mail->ErrorInfo}";
    }

} else {
    echo "Form not submitted";
}
?>