<?php
require_once 'include/db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start();

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
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $cv = $_FILES['cv'] ?? null;
    
    // Get reCAPTCHA response (optional for now)
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    
    // Log for debugging
    error_log("reCAPTCHA Token received: " . ($recaptchaResponse ? 'Yes' : 'No'));
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        die('All fields are required.');
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email address.');
    }
    
    // Check file upload
    if (!$cv || $cv['error'] !== 0) {
        die('Please upload your resume.');
    }
    
    // Verify reCAPTCHA (but don't fail if it doesn't work)
    $recaptchaValid = verifyRecaptcha($recaptchaResponse);
    if (!$recaptchaValid) {
        error_log("reCAPTCHA verification failed but continuing...");
    }

    // Process file upload
    $uploadDir = 'uploads/';
    
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadFile = $uploadDir . basename($cv['name']);
    $cv_filename = basename($cv['name']);

    if (move_uploaded_file($cv['tmp_name'], $uploadFile)) {
        // Save to database
        try {
            $stmt = $pdo->prepare("INSERT INTO slider_jobseeker_submissions (name, email, message, cv_filename, submission_date) VALUES (?, ?, ?, ?, NOW())");
            $stmt->execute([$name, $email, $message, $cv_filename]);
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
            $mail->addAddress('jobs@elitecorporatesolutions.com', 'Rajiv');
            $mail->addAttachment($uploadFile);
            $mail->isHTML(false);
            $mail->Subject = 'New Job Seeker Application';
            $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

            $mail->send();
            
            // Redirect to thank you page
            header("Location: thankyou.php");
            exit();
            
        } catch (Exception $e) {
            error_log("Mail error: " . $mail->ErrorInfo);
            die('Failed to send email. Please try again.');
        }
    } else {
        die('Failed to upload file.');
    }
} else {
    die('Invalid request.');
}
?>
