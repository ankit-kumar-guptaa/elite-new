<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .thank-you-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .thank-you-container {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #333;
            text-align: center;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .thank-you-container h1 {
            color: #4CAF50;
        }
        .thank-you-container p {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
    <script>
        // Redirect to homepage after 5 seconds
        setTimeout(function() {
            window.location.href = '/';
        }, 5000);
    </script>
</head>
<body>

<div class="main-page-wrapper">
    <?php include_once 'include/header.php'; ?>

    <div class="thank-you-wrapper">
        <div class="thank-you-container">
            <h1>Thank You!</h1>
            <p>Your message has been sent successfully. You will be redirected to the homepage shortly.</p>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>

