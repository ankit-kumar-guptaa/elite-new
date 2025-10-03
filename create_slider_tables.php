<?php
require_once 'include/db.php';

// Create table for employer submissions
try {
    $sql = "CREATE TABLE IF NOT EXISTS slider_employer_submissions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        email VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        submission_date DATETIME NOT NULL
    )";
    
    $pdo->exec($sql);
    echo "Table 'slider_employer_submissions' created successfully.<br>";
} catch(PDOException $e) {
    echo "Error creating table: " . $e->getMessage() . "<br>";
}

// Create table for job seeker submissions
try {
    $sql = "CREATE TABLE IF NOT EXISTS slider_jobseeker_submissions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        cv_filename VARCHAR(255) NOT NULL,
        submission_date DATETIME NOT NULL
    )";
    
    $pdo->exec($sql);
    echo "Table 'slider_jobseeker_submissions' created successfully.<br>";
} catch(PDOException $e) {
    echo "Error creating table: " . $e->getMessage() . "<br>";
}

echo "Database setup completed.";
?>