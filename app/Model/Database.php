<?php

class Database {
    private static ?PDO $pdo = null;

    public static function connect(): PDO {
        if (self::$pdo === null) {
            $config = include __DIR__ . '/../config/config.php'; // 변경된 경로 반영
            $db = $config['database']['mysql'];

            $dsn = "mysql:host={$db['host']};port={$db['port']};dbname={$db['credentials']['dbname']};charset={$db['options']['charset']}";

            try {
                self::$pdo = new PDO(
                    $dsn,
                    $db['credentials']['user'],
                    $db['credentials']['password'],
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_PERSISTENT => $db['options']['persistent']
                    ]
                );
            } catch (PDOException $e) {
                die("DB 연결 오류: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
