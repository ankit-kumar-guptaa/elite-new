<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'password123') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid login details!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fdfdfd;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            border: 3px solid #c32528; /* Red border */
        }
        .login-container img {
            width: 100px;
            margin-bottom: 20px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #261a6a; /* Dark Blue Text */
        }
        .form-control {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #c32528; /* Red border for inputs */
        }
        .btn-primary {
            background-color: #261a6a;
            border: none;
            padding: 10px 20px;
            width: 100%;
            font-size: 1rem;
            border-radius: 5px;
            color: #fdfdfd;
            font-weight: bold;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary:hover {
            background-color: #c32528; /* Hover color changes to red */
        }
        .form-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #c32528; /* Icon matches red branding */
        }
        .form-group {
            position: relative;
        }
        .error-message {
            color: #c32528;
            font-size: 0.9rem;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.85rem;
            color: #261a6a;
        }
    </style>
</head>
<body>
<div class="login-container">
    <img src="https://ecs.elitecorporatesolutions.com/wp-content/uploads/2022/06/elite_logo-140x51.jpeg" alt="Logo"> <!-- Replace 'logo.png' with your logo -->
    <h2>Admin Login</h2>
    <form method="POST">
        <div class="form-group">
            <i class="fas fa-user form-icon"></i>
            <input type="text" name="username" class="form-control ps-4" placeholder="Username" required>
        </div>
        <div class="form-group">
            <i class="fas fa-lock form-icon"></i>
            <input type="password" name="password" class="form-control ps-4" placeholder="Password" required>
        </div>
        <?php if (isset($error)): ?>
            <p class="error-message"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
    </form>
</div>
<footer>
    &copy; <?= date('Y') ?> Elite Admin Panel. All rights reserved.
</footer>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
