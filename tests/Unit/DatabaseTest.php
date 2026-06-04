<?php

namespace Tests\Unit;

use App\Core\Database;
use PDO;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function test_database_class_exists(): void
    {
        $this->assertTrue(
            class_exists(Database::class)
        );
    }

    public function test_connection_returns_pdo(): void
    {
        $connection = Database::connection();

        $this->assertInstanceOf(
            PDO::class,
            $connection
        );
    }
}
