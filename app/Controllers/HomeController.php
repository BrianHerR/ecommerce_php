<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

final class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('home.index', [
            'title' => 'Tienda de Electrodomesticos',
        ]);
    }

    public function catalog(): void
    {
        $this->view('catalog.index', [
            'title' => 'Catalogo',
        ]);
    }

    public function product(): void
    {
        $this->view('catalog.product', [
            'title' => 'Detalle de producto',
        ]);
    }
}
