<?php
// routes.php

$routes = [
    '/' => 'home.php',
    // '/home' => 'home.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
    '/services' => 'services.php',
    '/services/learning-development' => 'services/learning-development.php',
    '/services/hr-outsourcing' => 'services/hr-outsourcing.php',
    '/services/welcome-india' => 'services/welcome-india.php',
    '/services/startup-support' => 'services/startup-support.php',
    '/services/bad-debts' => 'services/bad-debts.php',
    '/solutions' => 'solutions.php',
    '/jobs' => 'jobs.php',
    '/jobs/current' => 'jobs/current.php',
    '/jobs/submit-resume' => 'jobs/submit-resume.php',
    '/jobs/login' => 'jobs/login.php',
    // Add more routes as needed
];

function handleRequest($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        include $routes[$uri];
    } else {
        include '404.php';
    }
}
