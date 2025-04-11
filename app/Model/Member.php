<?php
require_once __DIR__ . '/Database.php';

class Member
{
    public static function getAllUsers(): array
    {
        $pdo = Database::connect();
        $stmt = $pdo->query("SELECT * FROM member");
        return $stmt->fetchAll();
    }

    public function getMemByEmail($email)
    {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("SELECT * FROM member WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}