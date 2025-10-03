<?php
session_start();
require_once 'include/db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// reCAPTCHA verification function
function verifyRecaptcha($recaptchaResponse) {
    if (empty($recaptchaResponse)) {
        return false;
    }
    
    $secretKey = '6Ledy8UrAAAAAERlqjDOP4rshduNBcWdZ_l_n-av';
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    
    $data = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
            'timeout' => 10
        ]
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === FALSE) {
        return false;
    }
    
    $resultJson = json_decode($result, true);
    
    if (!$resultJson || !isset($resultJson['success']) || !$resultJson['success']) {
        return false;
    }
    
    if (isset($resultJson['score']) && $resultJson['score'] < 0.3) {
        return false;
    }
    
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get reCAPTCHA response
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    
    // Verify reCAPTCHA
    $recaptchaValid = verifyRecaptcha($recaptchaResponse);
    
    if (!$recaptchaValid) {
        error_log("reCAPTCHA verification failed");
        echo "<script>alert('Security verification failed. Please try again.'); window.history.back();</script>";
        exit();
    }
    
    // Get form type
    $formType = $_POST['form_type'] ?? '';
    
    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    
    try {
        // Server settings - Your existing SMTP (PERFECT!)
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@greencarcarpool.com';
        $mail->Password = 'Rajiv@111@';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        
        // Add timeout settings
        $mail->Timeout = 30;
        
        // Set sender
        $mail->setFrom('no-reply@greencarcarpool.com', 'Elite Corporate Solutions');
        
        // Process based on form type
        if ($formType === 'slider_employer') {
            // Employer form processing
            $name = trim($_POST['name'] ?? '');
            $phone = trim($_POST['phone'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $message = trim($_POST['message'] ?? '');
            
            // Validation
            if (empty($name) || empty($phone) || empty($email) || empty($message)) {
                echo "<script>alert('All fields are required.'); window.history.back();</script>";
                exit();
            }
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Please enter a valid email address.'); window.history.back();</script>";
                exit();
            }
            
            // Save to database
            $submissionId = null;
            try {
                $stmt = $pdo->prepare("INSERT INTO slider_employer_submissions (name, phone, email, message, submission_date, status) VALUES (?, ?, ?, ?, NOW(), 'pending')");
                $dbResult = $stmt->execute([$name, $phone, $email, $message]);
                $submissionId = $pdo->lastInsertId();
                error_log("Employer form saved with ID: " . $submissionId);
            } catch (PDOException $e) {
                error_log("Database error (Employer): " . $e->getMessage());
            }
            
            // Add recipient
            $mail->addAddress('Rajiv@elitecorporatesolutions.com', 'Rajiv');
            
            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'New Employer Inquiry - ' . $name;
            
            $mail->Body = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                <h2 style='color: #333; border-bottom: 2px solid #4CAF50; padding-bottom: 10px;'>
                    New Employer Inquiry from Website
                </h2>
                
                <div style='background: #f9f9f9; padding: 20px; border-radius: 8px; margin: 20px 0;'>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'><strong>Name:</strong></td>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($name) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'><strong>Phone:</strong></td>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($phone) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'><strong>Email:</strong></td>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($email) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'><strong>Date:</strong></td>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'>" . date('Y-m-d H:i:s') . "</td>
                        </tr>
                    </table>
                    
                    <div style='margin: 20px 0;'>
                        <strong>Requirements:</strong>
                        <div style='background: white; padding: 15px; border-radius: 4px; margin-top: 10px; border-left: 4px solid #4CAF50;'>
                            " . nl2br(htmlspecialchars($message)) . "
                        </div>
                    </div>
                    
                    <div style='font-size: 12px; color: #666; margin-top: 20px;'>
                        <p>Database ID: " . ($submissionId ?? 'Not saved') . "</p>
                        <p>Source: Website Slider Form</p>
                    </div>
                </div>
            </div>";
            
            // Plain text version
            $mail->AltBody = "New Employer Inquiry\n\nName: $name\nPhone: $phone\nEmail: $email\nRequirements: $message\nDate: " . date('Y-m-d H:i:s');
            
        } elseif ($formType === 'slider_jobseeker') {
            // Job seeker form processing
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $message = trim($_POST['message'] ?? '');
            
            // Validation
            if (empty($name) || empty($email) || empty($message)) {
                echo "<script>alert('All fields are required.'); window.history.back();</script>";
                exit();
            }
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Please enter a valid email address.'); window.history.back();</script>";
                exit();
            }
            
            // Handle file upload
            $resumeAttached = false;
            $fileName = '';
            $originalFileName = '';
            $fileSize = 0;
            
            if (isset($_FILES['cv']) && $_FILES['cv']['error'] === 0) {
                $uploadDir = 'uploads/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                
                $originalFileName = $_FILES['cv']['name'];
                $fileSize = $_FILES['cv']['size'];
                $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
                
                $fileName = date('Ymd_His') . '_' . uniqid() . '.' . $fileExtension;
                $uploadFile = $uploadDir . $fileName;
                
                if (move_uploaded_file($_FILES['cv']['tmp_name'], $uploadFile)) {
                    $resumeAttached = true;
                    $mail->addAttachment($uploadFile, $originalFileName);
                }
            }
            
            // Save to database
            $submissionId = null;
            try {
                $stmt = $pdo->prepare("INSERT INTO slider_jobseeker_submissions (name, email, message, cv_filename, cv_original_name, cv_file_size, submission_date, status) VALUES (?, ?, ?, ?, ?, ?, NOW(), 'pending')");
                $dbResult = $stmt->execute([$name, $email, $message, $fileName, $originalFileName, $fileSize]);
                $submissionId = $pdo->lastInsertId();
                error_log("Job seeker form saved with ID: " . $submissionId);
            } catch (PDOException $e) {
                error_log("Database error (Job Seeker): " . $e->getMessage());
            }
            
            // Add recipient
            $mail->addAddress('jobs@elitecorporatesolutions.com', 'Rajiv');
            
            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'New Job Application - ' . $name;
            
            $mail->Body = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                <h2 style='color: #333; border-bottom: 2px solid #2196F3; padding-bottom: 10px;'>
                    New Job Application from Website
                </h2>
                
                <div style='background: #f9f9f9; padding: 20px; border-radius: 8px; margin: 20px 0;'>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'><strong>Name:</strong></td>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($name) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'><strong>Email:</strong></td>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($email) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'><strong>Resume:</strong></td>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'>" . ($resumeAttached ? 'Attached (' . htmlspecialchars($originalFileName) . ')' : 'Not uploaded') . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'><strong>Date:</strong></td>
                            <td style='padding: 8px 0; border-bottom: 1px solid #ddd;'>" . date('Y-m-d H:i:s') . "</td>
                        </tr>
                    </table>
                    
                    <div style='margin: 20px 0;'>
                        <strong>Skills & Experience:</strong>
                        <div style='background: white; padding: 15px; border-radius: 4px; margin-top: 10px; border-left: 4px solid #2196F3;'>
                            " . nl2br(htmlspecialchars($message)) . "
                        </div>
                    </div>
                    
                    <div style='font-size: 12px; color: #666; margin-top: 20px;'>
                        <p>Database ID: " . ($submissionId ?? 'Not saved') . "</p>
                        <p>Source: Website Slider Form</p>
                    </div>
                </div>
            </div>";
            
            // Plain text version
            $mail->AltBody = "New Job Application\n\nName: $name\nEmail: $email\nSkills: $message\nResume: " . ($resumeAttached ? 'Yes' : 'No') . "\nDate: " . date('Y-m-d H:i:s');
            
        } else {
            echo "<script>alert('Invalid form submission.'); window.history.back();</script>";
            exit();
        }
        
        // Send email
        if ($mail->send()) {
            error_log("Email sent successfully for form type: " . $formType);
            header('Location: thankyou.php');
            exit();
        } else {
            error_log("Email sending failed");
            echo "<script>alert('Message could not be sent. Please try again.'); window.history.back();</script>";
        }
        
    } catch (Exception $e) {
        error_log("PHPMailer Error: " . $e->getMessage());
        echo "<script>alert('Message could not be sent. Error: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid request.'); window.location.href = 'index.php';</script>";
    exit();
}
?>
