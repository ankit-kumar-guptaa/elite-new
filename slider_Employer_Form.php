<?php
session_start();
require_once 'include/db.php'; // Include database connection

// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Google reCAPTCHA v3 verification function
function verifyRecaptcha($recaptchaResponse) {
    $secretKey = '6Ledy8UrAAAAAERlqjDOP4rshduNBcWdZ_l_n-av';
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    
    // Make the request
    $data = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $resultJson = json_decode($result);
    
    return $resultJson;
}

if(isset($_POST['submit'])){
    // Get reCAPTCHA response
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    
    // Check if reCAPTCHA response is empty
    if(empty($recaptchaResponse)) {
        echo json_encode(['status' => false, 'message' => 'Security verification failed. Please try again.']);
        exit();
    }
    
    // Verify reCAPTCHA
    $recaptchaResult = verifyRecaptcha($recaptchaResponse);
    
    // Check if reCAPTCHA verification failed
    if (!$recaptchaResult->success || $recaptchaResult->score < 0.5) {
        echo json_encode(['status' => false, 'message' => 'Security verification failed. Please try again.']);
        exit();
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Save to database
    try {
        $stmt = $pdo->prepare("INSERT INTO slider_employer_submissions (name, phone, email, message, submission_date) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$name, $phone, $email, $message]);
    } catch (PDOException $e) {
        // Log error but continue with email sending
        error_log("Database error: " . $e->getMessage());
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'no-reply@greencarcarpool.com';               // SMTP username
        $mail->Password   = 'Rajiv@111@';                        // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('no-reply@greencarcarpool.com', 'Elite Corporate Solutions');
        $mail->addAddress('Rajiv@elitecorporatesolutions.com', 'Rajiv');     // Add a recipient

        // Content
        $mail->isHTML(false);                                  // Set email format to plain text
        $mail->Subject = 'New Message from Slider Employer Form';
        $mail->Body    = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";

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