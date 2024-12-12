<?php
// 404.php

http_response_code(404);
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>Elite Corporate Solutions</title>
		


		<?php include 'include/assets.php'; ?>
	</head>

	<body>
		<div class="main-page-wrapper">

        <?php
include_once 'include/header.php';
?>




<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Page Not Found</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Error Page 
			============================================== 
			-->
			<div class="container error-page">
				<h2>404</h2>
				<h3>Looks like somthing went wrong</h3>
				<p>The page you are looking for was moved, removed, renamed or might never existed.</p>
				<div>
					<a href="/" class="theme-button-one">Go Home</a>
				</div>
			</div> <!-- /.error-page -->






            <?php include_once 'include/footer.php'; ?>