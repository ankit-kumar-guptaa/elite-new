<?php
// routes.php

$routes = [
    '/' => 'home.php',
    // '/home' => 'home.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
    '/services' => 'services.php',
    '/learning-development' => 'learning-development.php',
    '/hr-outsourcing' => 'hr-outsourcing.php',
    '/welcome-india' => 'welcome-india.php',
    '/startup-support' => 'startup-support.php',
    '/bad-debts' => 'bad-debts.php',
    '/website-development' => 'website-development.php',
    '/solutions' => 'solutions.php',
    '/submit_cv' => 'submit_cv.php',
    '/russia-india' => 'russia-india-services.php',
    // '/jobs/current' => 'jobs/current.php',
    // '/jobs/submit-resume' => 'jobs/submit-resume.php',
    // '/jobs/login' => 'jobs/login.php',
  
];

function handleRequest($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        include $routes[$uri];
    } else {
        include '404.php';
    }
}
