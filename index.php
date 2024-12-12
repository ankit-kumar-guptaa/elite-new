<?php
// index.php

include 'routes.php';

$uri = '/' . trim($_GET['uri'] ?? '/', '/');
handleRequest($uri, $routes);
