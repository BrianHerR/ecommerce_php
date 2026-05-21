<?php

declare(strict_types=1);

use App\Controllers\HomeController;

$router->get('/', [HomeController::class, 'index']);
$router->get('/catalogo', [HomeController::class, 'catalog']);
$router->get('/producto', [HomeController::class, 'product']);
