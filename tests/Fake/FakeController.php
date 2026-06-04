<?php

declare(strict_types=1);

namespace Tests\Fakes;

use App\Core\Controller;

class TestController extends Controller
{
    public function render(string $view, array $data = []): void
    {
        $this->view($view, $data);
    }
}
