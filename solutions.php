<?php
// Defining content in variables for easy management
$overview_title = "Overview";
$overview_content = "At Elite Corporate Solutions, we are committed to creating a positive impact on your staffing needs. As a highly reputed headhunting and manpower recruitment firm, we have earned recognition for delivering exceptional customer service and providing skilled employees to companies of all sizes and industries. We take the time to deeply understand your organization's specific workforce requirements. By leveraging our industry expertise, we focus on more than just finding candidates with the right skills. We seek individuals who are not only qualified but also productive, have a positive attitude, and are able to integrate smoothly into your team.";

$methods_title = "Our Methods and Approach";
$methods_content = "Our Search Methods: We tailor our search methods to fit each client’s unique requirements. By understanding factors like industry-specific skills and the geographic location of talent, we carefully shortlist candidates. The geographic scope of our search is determined based on our client's needs and company culture, ensuring a precise match.";

$work_process_title = "Our Work Process";
$work_process_content = "We proactively tap into the talent market, identifying exceptional candidates who meet your specific needs. Once we’ve identified potential candidates, we conduct in-depth interviews to gather comprehensive details, including:
<ul>
    <li>Educational background</li>
    <li>Professional experience</li>
    <li>Career aspirations</li>
    <li>Personality traits</li>
    <li>Compensation expectations</li>
</ul> This thorough process ensures the best match for your company.";

// Displaying content dynamically
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Corporate Solutions</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .section-title {
            color: #0056b3;
            font-weight: bold;
        }
        .content-section {
            margin-bottom: 30px;
        }
        .content-text {
            font-size: 1.1rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-5">Elite Corporate Solutions</h1>
    
    <!-- Overview Section -->
    <div class="content-section">
        <h2 class="section-title"><?php echo $overview_title; ?></h2>
        <p class="content-text"><?php echo $overview_content; ?></p>
    </div>

    <!-- Methods Section -->
    <div class="content-section">
        <h2 class="section-title"><?php echo $methods_title; ?></h2>
        <p class="content-text"><?php echo $methods_content; ?></p>
    </div>

    <!-- Work Process Section -->
    <div class="content-section">
        <h2 class="section-title"><?php echo $work_process_title; ?></h2>
        <p class="content-text"><?php echo $work_process_content; ?></p>
    </div>
</div>

<!-- Bootstrap JS (Optional for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
