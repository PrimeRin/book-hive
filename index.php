<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$viewDir = '/src/views/';
$controllerDir = '/src/controllers/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/login':
        require __DIR__ . $viewDir . 'login.php';
        break;

    case '/dashboard':
        require __DIR__ . $viewDir . 'dashboard.php';
        break;
    
    case '/authController':
        require __DIR__ . $controllerDir . 'authController.php';
        break;

    case '/logoutController':
        require __DIR__ . $controllerDir . 'logoutController.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
?>
