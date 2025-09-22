<?php
session_start();

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get reCAPTCHA response
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    
    // Verify reCAPTCHA
    $recaptchaResult = verifyRecaptcha($recaptchaResponse);
    
    // Check if reCAPTCHA verification failed
    if (!$recaptchaResult->success || $recaptchaResult->score < 0.5) {
        echo "<script>alert('Security verification failed. Please try again.'); window.history.back();</script>";
        exit();
    }
    
    // Get form type
    $formType = $_POST['form_type'] ?? '';
    
    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                   // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'no-reply@greencarcarpool.com';         // SMTP username
        $mail->Password   = 'Rajiv@111@';                           // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
        $mail->Port       = 587;                                    // TCP port to connect to
        
        // Recipients
        $mail->setFrom('no-reply@greencarcarpool.com', 'Elite Corporate Solutions');
        $mail->addAddress('Rajiv@elitecorporatesolutions.com', 'Rajiv'); // Add a recipient
        
        // Process based on form type
        if ($formType === 'usa_employer') {
            // Employer form processing
            $company = $_POST['company'] ?? '';
            $contact = $_POST['contact'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $email = $_POST['email'] ?? '';
            $industry = $_POST['industry'] ?? '';
            $positions = $_POST['positions'] ?? '';
            $visa_support = $_POST['visa_support'] ?? '';
            $requirements = $_POST['requirements'] ?? '';
            
            // Email content
            $mail->isHTML(false);
            $mail->Subject = 'New USA Employer Form Submission';
            $mail->Body = "Company: $company\n"
                        . "Contact Person: $contact\n"
                        . "Phone: $phone\n"
                        . "Email: $email\n"
                        . "Industry: $industry\n"
                        . "Positions: $positions\n"
                        . "Visa Support: $visa_support\n"
                        . "Requirements: $requirements\n"
                        . "Form Type: USA Employer Form";
            
        } elseif ($formType === 'usa_jobseeker') {
            // Job seeker form processing
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $experience = $_POST['experience'] ?? '';
            $category = $_POST['category'] ?? '';
            $visa_status = $_POST['visa_status'] ?? '';
            $skills = $_POST['skills'] ?? '';
            
            // Handle resume upload
            $resumeAttached = false;
            if (isset($_FILES['resume']) && $_FILES['resume']['error'] === 0) {
                $uploadDir = 'uploads/';
                
                // Ensure the directory exists
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                
                $fileName = basename($_FILES['resume']['name']);
                $uploadFile = $uploadDir . $fileName;
                
                // Move the uploaded file
                if (move_uploaded_file($_FILES['resume']['tmp_name'], $uploadFile)) {
                    $resumeAttached = true;
                    $mail->addAttachment($uploadFile, $fileName);
                }
            }
            
            // Email content
            $mail->isHTML(false);
            $mail->Subject = 'New USA Job Seeker Application';
            $mail->Body = "Name: $name\n"
                        . "Email: $email\n"
                        . "Phone: $phone\n"
                        . "Experience: $experience\n"
                        . "Job Category: $category\n"
                        . "Visa Status: $visa_status\n"
                        . "Skills: $skills\n"
                        . "Resume Attached: " . ($resumeAttached ? 'Yes' : 'No') . "\n"
                        . "Form Type: USA Job Seeker Form";
        } else {
            // Invalid form type
            echo "<script>alert('Invalid form submission.'); window.history.back();</script>";
            exit();
        }
        
        // Send email
        $mail->send();
        
        // Redirect to thank you page
        header('Location: thankyou.php');
        exit();
        
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
} else {
    // Not a POST request
    echo "<script>alert('Invalid request method.'); window.location.href = 'usa-india-services.php';</script>";
    exit();
}