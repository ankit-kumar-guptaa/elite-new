<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

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

    $uploadedFile = '';
    if (isset($_FILES['upload_cv']) && $_FILES['upload_cv']['error'] == 0) {
        $uploadedFile = 'uploads/' . basename($_FILES['upload_cv']['name']);
        move_uploaded_file($_FILES['upload_cv']['tmp_name'], $uploadedFile);
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'smtp@greencarcarpool.com';
        $mail->Password   = 'Rajiv@111@';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('smtp@greencarcarpool.com', 'Elite Corporate Solutions');
        $mail->addAddress('Rajiv@elitecorporatesolutions.com', 'Rajiv');

        $mail->isHTML(true);
        $mail->Subject = 'New CV Form Submission';
        $mail->Body = '<html><body><h3>New Form Submission</h3>
            <p><strong>First Name:</strong> ' . $firstName . '</p>
            <p><strong>Last Name:</strong> ' . $lastName . '</p>
            <p><strong>Gender:</strong> ' . $gender . '</p>
            <p><strong>Date of Birth:</strong> ' . $dateOfBirth . '</p>
            <p><strong>Email:</strong> ' . $email . '</p>
            <p><strong>Mobile No:</strong> ' . $mobile_no . '</p>
            <p><strong>City:</strong> ' . $city . '</p>
            <p><strong>Company:</strong> ' . $company . '</p>
            <p><strong>Designation:</strong> ' . $designation . '</p>
            <p><strong>Experience:</strong> ' . $experience . '</p>
            <p><strong>Current Salary:</strong> ' . $current_salary . '</p>
            <p><strong>Educational Qualification:</strong> ' . $educational_qualification . '</p>
            <p><strong>Institute:</strong> ' . $institute . '</p>
            <p><strong>Functional Area:</strong> ' . $functional_area . '</p>
            <p><strong>Industry:</strong> ' . $industry . '</p>
            <p><strong>Skills:</strong> ' . $skills . '</p>
        </body></html>';

        if (!empty($uploadedFile) && file_exists($uploadedFile)) {
            $mail->addAttachment($uploadedFile, basename($uploadedFile));
        }

        $mail->send();
        echo 'Form submitted successfully!';
    } catch (Exception $e) {
        echo 'Failed to send email. Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
