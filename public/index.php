<?php

declare(strict_types=1);

use App\Core\Router;
use Dotenv\Dotenv;

define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/vendor/autoload.php';

$envFile = $_ENV['APP_ENV_FILE'] ?? 'env.dev';

if (file_exists(BASE_PATH . '/' . $envFile)) {
    Dotenv::createImmutable(BASE_PATH, $envFile)->safeLoad();
}

$router = new Router();

require BASE_PATH . '/app/Routes/web.php';

$router->dispatch(
    $_SERVER['REQUEST_METHOD'] ?? 'GET',
    parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/'
);
