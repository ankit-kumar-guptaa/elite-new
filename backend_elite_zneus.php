<?php
ob_start();
session_start();
require_once 'include/db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// ===== AUTO-CREATE TABLES =====
function ensureTablesExist($pdo) {
    try {
        // Elite HR Inquiries table
        $pdo->exec("CREATE TABLE IF NOT EXISTS elite_hr_inquiries (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            phone VARCHAR(20) NOT NULL,
            email VARCHAR(100) NOT NULL,
            company VARCHAR(150) DEFAULT '',
            service_needed VARCHAR(100) NOT NULL,
            message TEXT NOT NULL,
            submission_date DATETIME NOT NULL,
            status VARCHAR(20) DEFAULT 'pending'
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        // Zneus Software Inquiries table
        $pdo->exec("CREATE TABLE IF NOT EXISTS zneus_software_inquiries (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            phone VARCHAR(20) NOT NULL,
            email VARCHAR(100) NOT NULL,
            company VARCHAR(150) DEFAULT '',
            employee_count VARCHAR(50) NOT NULL,
            message TEXT NOT NULL,
            submission_date DATETIME NOT NULL,
            status VARCHAR(20) DEFAULT 'pending'
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

    } catch (PDOException $e) {
        error_log("Table creation error: " . $e->getMessage());
    }
}

// Auto-create tables on every request
ensureTablesExist($pdo);

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
        error_log("reCAPTCHA verification failed for elite-zneus form");
        echo "<script>alert('Security verification failed. Please try again.'); window.history.back();</script>";
        exit();
    }
    
    // Get form type
    $formType = $_POST['form_type'] ?? '';
    
    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    
    // ===========================
    // ELITE HR INQUIRY
    // ===========================
    if ($formType === 'elite_inquiry') {
        $name = trim($_POST['name'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $company = trim($_POST['company'] ?? '');
        $serviceNeeded = trim($_POST['service_needed'] ?? '');
        $message = trim($_POST['message'] ?? '');
        
        // Validation
        if (empty($name) || empty($phone) || empty($email) || empty($serviceNeeded) || empty($message)) {
            echo "<script>alert('All required fields must be filled.'); window.history.back();</script>";
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Please enter a valid email address.'); window.history.back();</script>";
            exit();
        }
        
        // *** DB FIRST — Save to database BEFORE attempting email ***
        $submissionId = null;
        try {
            $stmt = $pdo->prepare("INSERT INTO elite_hr_inquiries (name, phone, email, company, service_needed, message, submission_date, status) VALUES (?, ?, ?, ?, ?, ?, NOW(), 'pending')");
            $dbResult = $stmt->execute([$name, $phone, $email, $company, $serviceNeeded, $message]);
            $submissionId = $pdo->lastInsertId();
            error_log("Elite HR inquiry saved with ID: " . $submissionId);
        } catch (PDOException $e) {
            error_log("Database error (Elite HR): " . $e->getMessage());
        }
        
        // *** THEN try email — if it fails, data is already saved ***
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@greencarcarpool.com';
            $mail->Password = 'Rajiv@111@';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->Timeout = 30;
            
            $mail->setFrom('no-reply@greencarcarpool.com', 'Elite Corporate Solutions');
            $mail->addAddress('Rajiv@elitecorporatesolutions.com', 'Rajiv');
            
            $mail->isHTML(true);
            $mail->Subject = 'New HR Inquiry - ' . $name . ' [' . $serviceNeeded . ']';
            
            $mail->Body = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                <div style='background: linear-gradient(135deg, #261a6a, #c32528); padding: 20px; border-radius: 10px 10px 0 0; text-align: center;'>
                    <h2 style='color: #fff; margin: 0;'>🏢 New Elite HR Inquiry</h2>
                    <p style='color: rgba(255,255,255,0.8); margin: 5px 0 0; font-size: 14px;'>From Landing Page</p>
                </div>
                
                <div style='background: #f9f9f9; padding: 24px; border-radius: 0 0 10px 10px;'>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Name:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . htmlspecialchars($name) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Phone:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . htmlspecialchars($phone) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Email:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . htmlspecialchars($email) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Company:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . htmlspecialchars($company ?: 'Not provided') . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Service Needed:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>
                                <span style='background: #c32528; color: #fff; padding: 3px 10px; border-radius: 12px; font-size: 13px;'>" . htmlspecialchars($serviceNeeded) . "</span>
                            </td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Date:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . date('Y-m-d H:i:s') . "</td>
                        </tr>
                    </table>
                    
                    <div style='margin: 20px 0;'>
                        <strong>Requirements:</strong>
                        <div style='background: white; padding: 15px; border-radius: 6px; margin-top: 8px; border-left: 4px solid #c32528;'>
                            " . nl2br(htmlspecialchars($message)) . "
                        </div>
                    </div>
                    
                    <div style='font-size: 12px; color: #999; margin-top: 16px;'>
                        <p>Database ID: " . ($submissionId ?? 'Not saved') . "</p>
                        <p>Source: Elite+Zneus Landing Page</p>
                    </div>
                </div>
            </div>";
            
            $mail->AltBody = "New Elite HR Inquiry\n\nName: $name\nPhone: $phone\nEmail: $email\nCompany: $company\nService: $serviceNeeded\nMessage: $message\nDate: " . date('Y-m-d H:i:s');
            
            $mail->send();
            error_log("Email sent successfully for Elite HR inquiry");
        } catch (Exception $e) {
            // Email failed — but data is already in DB, so we're fine!
            error_log("Email failed for Elite HR inquiry (data saved in DB): " . $e->getMessage());
        }
        
        // Redirect to thank you page
        if (ob_get_length()) {
            ob_end_clean();
        }
        header('Location: thankyou.php');
        exit();
        
    // ===========================
    // ZNEUS SOFTWARE INQUIRY
    // ===========================
    } elseif ($formType === 'zneus_inquiry') {
        $name = trim($_POST['name'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $company = trim($_POST['company'] ?? '');
        $employeeCount = trim($_POST['employee_count'] ?? '');
        $message = trim($_POST['message'] ?? '');
        
        // Validation
        if (empty($name) || empty($phone) || empty($email) || empty($employeeCount) || empty($message)) {
            echo "<script>alert('All required fields must be filled.'); window.history.back();</script>";
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Please enter a valid email address.'); window.history.back();</script>";
            exit();
        }
        
        // *** DB FIRST — Save to database BEFORE attempting email ***
        $submissionId = null;
        try {
            $stmt = $pdo->prepare("INSERT INTO zneus_software_inquiries (name, phone, email, company, employee_count, message, submission_date, status) VALUES (?, ?, ?, ?, ?, ?, NOW(), 'pending')");
            $dbResult = $stmt->execute([$name, $phone, $email, $company, $employeeCount, $message]);
            $submissionId = $pdo->lastInsertId();
            error_log("Zneus inquiry saved with ID: " . $submissionId);
        } catch (PDOException $e) {
            error_log("Database error (Zneus): " . $e->getMessage());
        }
        
        // *** THEN try email — if it fails, data is already saved ***
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@greencarcarpool.com';
            $mail->Password = 'Rajiv@111@';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->Timeout = 30;
            
            $mail->setFrom('no-reply@greencarcarpool.com', 'Zneus Software');
            $mail->addAddress('Rajiv@elitecorporatesolutions.com', 'Rajiv');
            
            $mail->isHTML(true);
            $mail->Subject = 'New Zneus Software Inquiry - ' . $name . ' [' . $employeeCount . ' employees]';
            
            $mail->Body = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                <div style='background: linear-gradient(135deg, #4361ee, #6366f1); padding: 20px; border-radius: 10px 10px 0 0; text-align: center;'>
                    <h2 style='color: #fff; margin: 0;'>💻 New Zneus Software Inquiry</h2>
                    <p style='color: rgba(255,255,255,0.8); margin: 5px 0 0; font-size: 14px;'>From Landing Page</p>
                </div>
                
                <div style='background: #f9f9f9; padding: 24px; border-radius: 0 0 10px 10px;'>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Name:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . htmlspecialchars($name) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Phone:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . htmlspecialchars($phone) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Email:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . htmlspecialchars($email) . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Company:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . htmlspecialchars($company ?: 'Not provided') . "</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Team Size:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>
                                <span style='background: #4361ee; color: #fff; padding: 3px 10px; border-radius: 12px; font-size: 13px;'>" . htmlspecialchars($employeeCount) . "</span>
                            </td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'><strong>Date:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eee;'>" . date('Y-m-d H:i:s') . "</td>
                        </tr>
                    </table>
                    
                    <div style='margin: 20px 0;'>
                        <strong>Monitoring Needs:</strong>
                        <div style='background: white; padding: 15px; border-radius: 6px; margin-top: 8px; border-left: 4px solid #4361ee;'>
                            " . nl2br(htmlspecialchars($message)) . "
                        </div>
                    </div>
                    
                    <div style='font-size: 12px; color: #999; margin-top: 16px;'>
                        <p>Database ID: " . ($submissionId ?? 'Not saved') . "</p>
                        <p>Source: Elite+Zneus Landing Page</p>
                    </div>
                </div>
            </div>";
            
            $mail->AltBody = "New Zneus Software Inquiry\n\nName: $name\nPhone: $phone\nEmail: $email\nCompany: $company\nTeam Size: $employeeCount\nMessage: $message\nDate: " . date('Y-m-d H:i:s');
            
            $mail->send();
            error_log("Email sent successfully for Zneus inquiry");
        } catch (Exception $e) {
            // Email failed — but data is already in DB, so we're fine!
            error_log("Email failed for Zneus inquiry (data saved in DB): " . $e->getMessage());
        }
        
        // Redirect to thank you page
        if (ob_get_length()) {
            ob_end_clean();
        }
        header('Location: thankyou.php');
        exit();
        
    } else {
        echo "<script>alert('Invalid form submission.'); window.history.back();</script>";
        exit();
    }
    
} else {
    echo "<script>alert('Invalid request.'); window.location.href = 'index.php';</script>";
    exit();
}
?>
