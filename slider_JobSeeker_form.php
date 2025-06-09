<?php
// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    $user_captcha = $_POST['captcha'] ?? '';
    $generated_captcha = $_SESSION['captcha'] ?? '';
    $cv = $_FILES['cv'] ?? null;

    // Validate CAPTCHA
    if (empty($user_captcha)) {
        $response["message"] = "CAPTCHA is required.";
    } elseif ($user_captcha !== $generated_captcha) {
        $response["message"] = "Invalid CAPTCHA. Please try again.";
    } elseif ($cv && $cv['error'] === 0) {
        $uploadDir = 'uploads/';

        // Ensure the directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
        }

        $uploadFile = $uploadDir . basename($cv['name']);

        if (move_uploaded_file($cv['tmp_name'], $uploadFile)) {
            $mail = new PHPMailer(true);

            try {
                // SMTP Configuration
                $mail->isSMTP();
                $mail->Host       = 'smtp.hostinger.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'no-reply@greencarcarpool.com'; // SMTP username
                $mail->Password   = 'Rajiv@111@';               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                // Email Configuration
                $mail->setFrom('no-reply@greencarcarpool.com', 'Elite Corporate Solutions');
                $mail->addAddress('theankitkumarg@gmail.com', 'Rajiv'); // Add a recipient
                $mail->addAttachment($uploadFile); // Attach the uploaded file
                $mail->isHTML(false);
                $mail->Subject = 'New Job Seeker Application';
                $mail->Body    = "Name: $name\nEmail: $email\nMessage: $message";

                $mail->send();
                // Redirect to thankyou.php on success
                header("Location: thankyou.php");
                exit();
            } catch (Exception $e) {
                $response["message"] = "Email sending failed. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $response["message"] = "Failed to upload file.";
        }
    } else {
        $response["message"] = "Error uploading file.";
    }

    // Return JSON response for errors
    $response["status"] = false;
    header("Content-Type: application/json");
    echo json_encode($response);
    exit();
}
?>