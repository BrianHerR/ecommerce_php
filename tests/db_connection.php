<?php

declare(strict_types=1);

use App\Core\Database;
use Dotenv\Dotenv;

define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/vendor/autoload.php';

Dotenv::createImmutable(BASE_PATH)->load();

Database::ping();

echo "Conexion MySQL OK\n";
