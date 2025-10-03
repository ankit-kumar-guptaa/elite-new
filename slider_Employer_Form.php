<?php
session_start();
require_once 'include/db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function verifyRecaptcha($recaptchaResponse) {
    // If token is empty, skip verification (for testing)
    if (empty($recaptchaResponse)) {
        return true; // Allow submission for now
    }
    
    $secretKey = '6Ledy8UrAAAAAERlqjDOP4rshduNBcWdZ_l_n-av';
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    
    $postData = http_build_query([
        'secret' => $secretKey,
        'response' => $recaptchaResponse
    ]);
    
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => $postData
        ]
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === FALSE) {
        return true; // Allow if verification fails
    }
    
    $resultJson = json_decode($result, true);
    return isset($resultJson['success']) ? $resultJson['success'] : true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    
    // Get form data
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Get reCAPTCHA response (optional for now)
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    
    // Log for debugging
    error_log("reCAPTCHA Token received: " . ($recaptchaResponse ? 'Yes' : 'No'));
    
    // Basic validation
    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        die('All fields are required.');
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email address.');
    }
    
    // Verify reCAPTCHA (but don't fail if it doesn't work)
    $recaptchaValid = verifyRecaptcha($recaptchaResponse);
    if (!$recaptchaValid) {
        error_log("reCAPTCHA verification failed but continuing...");
    }
    
    // Save to database
    try {
        $stmt = $pdo->prepare("INSERT INTO slider_employer_submissions (name, phone, email, message, submission_date) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$name, $phone, $email, $message]);
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
    }

    // Send email
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@greencarcarpool.com';
        $mail->Password = 'Rajiv@111@';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('no-reply@greencarcarpool.com', 'Elite Corporate Solutions');
        $mail->addAddress('Rajiv@elitecorporatesolutions.com', 'Rajiv');

        $mail->isHTML(false);
        $mail->Subject = 'New Message from Slider Employer Form';
        $mail->Body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";

        $mail->send();
        
        // Redirect to thank you page
        header('Location: thankyou.php');
        exit();

    } catch (Exception $e) {
        error_log("Mail error: " . $mail->ErrorInfo);
        die('Failed to send email. Please try again.');
    }
} else {
    die('Invalid request.');
}
?>
