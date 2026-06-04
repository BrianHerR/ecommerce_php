<?php

declare(strict_types=1);

namespace Tests\Unit;

use RuntimeException;
use PHPUnit\Framework\TestCase;
use Tests\Fakes\TestController;

class ControllerTest extends TestCase
{
    public function test_throws_exception_when_view_does_not_exist(): void
    {
        $controller = new TestController();

        $this->expectException(RuntimeException::class);

        $controller->render('vista.inexistente');
    }
}
