<?php
session_start();

// Generate a random CAPTCHA code
$captcha_code = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), 0, 6);
$_SESSION['captcha'] = $captcha_code;

// Create an image
$image = imagecreatetruecolor(150, 50);

// Set colors
$background_color = imagecolorallocate($image, 255, 255, 255); // White background
$text_color = imagecolorallocate($image, 0, 0, 0);             // Black text
$line_color = imagecolorallocate($image, 64, 64, 64);          // Gray lines
$pixel_color = imagecolorallocate($image, 100, 100, 100);      // Gray dots

// Fill the background
imagefilledrectangle($image, 0, 0, 150, 50, $background_color);

// Add random lines for noise
for ($i = 0; $i < 5; $i++) {
    imageline($image, 0, rand(0, 50), 150, rand(0, 50), $line_color);
}

// Add random dots for noise
for ($i = 0; $i < 1000; $i++) {
    imagesetpixel($image, rand(0, 150), rand(0, 50), $pixel_color);
}

// Add the CAPTCHA text using imagestring
imagestring($image, 5, 35, 15, $captcha_code, $text_color);

// Output the image
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
