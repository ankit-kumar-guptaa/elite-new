<?php
$host = 'localhost';
$db = 'submit_form_data';
$user = 'root'; // Replace with your database username
$pass = '';     // Replace with your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>




<!-- $host = 'localhost:3306';
$db = 'recru2l1_submit_form_data';
$user = 'recru2l1_elite_admin'; 
$pass = 'Elite@123@';     -->