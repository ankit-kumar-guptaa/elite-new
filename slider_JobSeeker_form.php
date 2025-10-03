<?php
require_once 'include/db.php'; // Include database connection

// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start();

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    $cv = $_FILES['cv'] ?? null;
    
    // Get reCAPTCHA response
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    
    // Check if reCAPTCHA response is empty
    if(empty($recaptchaResponse)) {
        $response["message"] = "Security verification failed. Please try again.";
        $response["status"] = false;
        header("Content-Type: application/json");
        echo json_encode($response);
        exit();
    }
    
    // Verify reCAPTCHA
    $recaptchaResult = verifyRecaptcha($recaptchaResponse);
    
    // Check if reCAPTCHA verification failed
    if (!$recaptchaResult->success || $recaptchaResult->score < 0.5) {
        $response["message"] = "Security verification failed. Please try again.";
        $response["status"] = false;
        header("Content-Type: application/json");
        echo json_encode($response);
        exit();
    }

    if ($cv && $cv['error'] === 0) {
        $uploadDir = 'uploads/';

        // Ensure the directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
        }

        $uploadFile = $uploadDir . basename($cv['name']);
        $cv_filename = basename($cv['name']);

        if (move_uploaded_file($cv['tmp_name'], $uploadFile)) {
            // Save to database
            try {
                $stmt = $pdo->prepare("INSERT INTO slider_jobseeker_submissions (name, email, message, cv_filename, submission_date) VALUES (?, ?, ?, ?, NOW())");
                $stmt->execute([$name, $email, $message, $cv_filename]);
            } catch (PDOException $e) {
                // Log error but continue with email sending
                error_log("Database error: " . $e->getMessage());
            }
            
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
                $mail->addAddress('jobs@elitecorporatesolutions.com', 'Rajiv'); // Add a recipient
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