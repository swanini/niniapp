<?php
require_once __DIR__ . '/Database.php';

class Upmenu
{
    public static function getAllUpmenu(): array
    {
        $pdo = Database::connect();
        $stmt = $pdo->query("SELECT * FROM upmenu");
        return $stmt->fetchAll();
    }
}