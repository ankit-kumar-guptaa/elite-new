<?php
// Defining content in variables for easier management
$overview_title = "Overview";
$overview_content = "At Elite Corporate Solutions, we are committed to creating a positive impact on your staffing needs. As a highly reputed headhunting and manpower recruitment firm, we have earned recognition for delivering exceptional customer service and providing skilled employees to companies of all sizes and industries.

We take the time to deeply understand your organization's specific workforce requirements. By leveraging our industry expertise, we focus on more than just finding candidates with the right skills. We seek individuals who are not only qualified but also productive, have a positive attitude, and are able to integrate smoothly into your team.

While traditional recruitment methods such as newspaper advertisements have their place, we go beyond the conventional. By utilizing innovative technology-driven approaches and online platforms, we ensure that our clients receive the most suitable and qualified candidates for their unique needs.";

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
</ul> This thorough process allows us to present candidates who not only fit the job description but align with your company's values and culture.";

$business_approach_title = "Our Business Approach";
$business_approach_content = "Our streamlined recruitment methodology ensures that we provide the right manpower on time and according to your specifications. With our experienced team, we handle every aspect of the recruitment process, including:
<ul>
    <li>Testing and assessment of candidates</li>
    <li>Conducting interviews</li>
    <li>Final selection</li>
</ul>";

$team_title = "Our Team and Infrastructure";
$team_content = "We are equipped with powerful integrated recruitment technologies and have a team of seasoned expert recruiters. We have all the latest facilities in the areas of communication, frequent transport, etc., leading to the expedition of the entire process.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Corporate Solutions</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external stylesheet -->
</head>
<body>
    <div class="container">
        <!-- Overview Section -->
        <section class="overview">
            <h2><?php echo $overview_title; ?></h2>
            <p><?php echo $overview_content; ?></p>
        </section>

        <!-- Methods and Approach Section -->
        <section class="methods-approach">
            <h2><?php echo $methods_title; ?></h2>
            <p><?php echo $methods_content; ?></p>
        </section>

        <!-- Work Process Section -->
        <section class="work-process">
            <h2><?php echo $work_process_title; ?></h2>
            <p><?php echo $work_process_content; ?></p>
        </section>

        <!-- Business Approach Section -->
        <section class="business-approach">
            <h2><?php echo $business_approach_title; ?></h2>
            <p><?php echo $business_approach_content; ?></p>
        </section>

        <!-- Team and Infrastructure Section -->
        <section class="team-infrastructure">
            <h2><?php echo $team_title; ?></h2>
            <p><?php echo $team_content; ?></p>
        </section>
    </div>
</body>
</html>
