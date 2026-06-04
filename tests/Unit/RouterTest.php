<?php

namespace Tests\Unit;

use App\Core\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    public function test_router_class_exists(): void
    {
        $this->assertTrue(
            class_exists(Router::class)
        );
    }
}