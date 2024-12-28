<?php

session_start();


// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'include/db.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {




    if (!isset($_POST['captcha']) || $_POST['captcha'] !== $_SESSION['captcha']) {
        echo "<script>
                document.getElementById('captcha-error').innerText = 'Incorrect CAPTCHA. Please try again.';
                window.history.back();
              </script>";
        exit;
    }
    unset($_SESSION['captcha']);

    
    // Collect form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $city = $_POST['city'];
    $company = $_POST['company'];
    $designation = $_POST['designation'];
    $experience = $_POST['experience'];
    $current_salary = $_POST['current_salary'];
    $educational_qualification = $_POST['educational_qualification'];
    $institute = $_POST['institute'];
    $functional_area = $_POST['functional_area'];
    $industry = $_POST['industry'];
    $skills = $_POST['skills'];

    // File upload handling
    $cv_path = null;
    $uploadDir = 'uploads/';

    // Ensure the directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (isset($_FILES['upload_cv']) && $_FILES['upload_cv']['error'] == 0) {
        $cv_path = $uploadDir . basename($_FILES['upload_cv']['name']);
        if (!move_uploaded_file($_FILES['upload_cv']['tmp_name'], $cv_path)) {
            die("Failed to upload file.");
        }
    }

    // Insert data into the database
    $stmt = $pdo->prepare("INSERT INTO submissions 
        (first_name, last_name, gender, date_of_birth, email, mobile_no, city, company, designation, experience, current_salary, educational_qualification, institute, functional_area, industry, skills, cv_path)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$firstName, $lastName, $gender, $dateOfBirth, $email, $mobile_no, $city, $company, $designation, $experience, $current_salary, $educational_qualification, $institute, $functional_area, $industry, $skills, $cv_path]);

    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rajiv@greencarcarpool.com'; // SMTP username
        $mail->Password   = 'Rajiv@111@'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('rajiv@greencarcarpool.com', 'Form Submission');
        $mail->addAddress('theankitkumarg@gmail.com'); // Admin email

        // Attach uploaded CV
        if ($cv_path) {
            $mail->addAttachment($cv_path);
        }

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission';
        $mail->Body = "
            <p><strong>Details:</strong></p>
            <ul>
                <li><strong>Name:</strong> $firstName $lastName</li>
                <li><strong>Email:</strong> $email</li>
                <li><strong>Mobile:</strong> $mobile_no</li>
                <li><strong>City:</strong> $city</li>
                <li><strong>Company:</strong> $company</li>
                <li><strong>Designation:</strong> $designation</li>
            </ul>
        ";

        // Send the email
        $mail->send();
        header('Location: thankyou.php');
                exit();
    } catch (Exception $e) {
        echo "Email sending failed: {$mail->ErrorInfo}";
    }
}
?>
