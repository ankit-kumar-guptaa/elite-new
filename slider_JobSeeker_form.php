<?php

// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $cv = $_FILES['cv'];

    // Check if file was uploaded without errors
    if ($cv['error'] == 0) {
        $uploadDir = 'uploads/';
        
        // Ensure the directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
        }

        $uploadFile = $uploadDir . basename($cv['name']);

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($cv['tmp_name'], $uploadFile)) {
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.hostinger.com';                   // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'no-reply@algoweb.in';                  // SMTP username
                $mail->Password   = 'Ankit@000@';                           // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
                $mail->Port       = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('no-reply@algoweb.in', 'Elite Corporate Solutions');
                $mail->addAddress('theankitkumarg@gmail.com', 'Rajiv');     // Add a recipient

                // Attach the uploaded file
                $mail->addAttachment($uploadFile);

                // Content
                $mail->isHTML(false);                                       // Set email format to plain text
                $mail->Subject = 'New Job Seeker Application';
                $mail->Body    = "Name: $name\nEmail: $email\nMessage: $message";

                $mail->send();

                header('Location: thankyou.php');
                exit();

            } catch (Exception $e) {
                echo "Email sending failed. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Form not submitted";
}
?>