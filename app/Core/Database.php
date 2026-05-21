<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use PDOException;
use RuntimeException;

final class Database
{
    private static ?PDO $connection = null;

    public static function connection(): PDO
    {
        if (self::$connection instanceof PDO) {
            return self::$connection;
        }

        $config = require BASE_PATH . '/config/database.php';
        $dsn = self::buildDsn($config);

        try {
            self::$connection = new PDO(
                $dsn,
                $config['username'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        } catch (PDOException $exception) {
            throw new RuntimeException(
                'No se pudo conectar a la base de datos: ' . $exception->getMessage(),
                (int) $exception->getCode(),
                $exception
            );
        }

        return self::$connection;
    }

    public static function disconnect(): void
    {
        self::$connection = null;
    }

    public static function ping(): bool
    {
        self::connection()->query('SELECT 1');
        return true;
    }

    private static function buildDsn(array $config): string
    {
        if (($config['driver'] ?? null) !== 'mysql') {
            throw new RuntimeException('Solo esta configurado el driver mysql.');
        }

        return sprintf(
            'mysql:host=%s;port=%d;dbname=%s;charset=%s',
            $config['host'],
            $config['port'],
            $config['database'],
            $config['charset']
        );
    }
}
