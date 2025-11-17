<?php
require_once __DIR__ . '/controllers/siteController.php';

// Define base url
define('BASE_URL', '/mvc-lab');

$route = $_GET['route'] ?? 'home';

// Front controller. Reads $_GET['route'] and loads correct controller function
switch ($route) {
    case 'home':
    case 'hours':
    case 'locations':
        showPage($route);
        break;
    case 'menu':
        showBeverages();
        break;

    default:
        showPage('home');
}
