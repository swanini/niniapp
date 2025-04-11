<?php
require_once __DIR__ . '/Database.php';

class Nininote
{
    // 전체 게시물 + 썸네일 포함 조회
    public static function getAllNotesWithThumbnail(): array
    {
        $pdo = Database::connect();
        $sql = "SELECT id, writer_name, subject, contentkr, contentjp, contenten, good, hit, reg_date
                FROM nininote
                ORDER BY id DESC";
        $stmt = $pdo->query($sql);
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // 썸네일 이미지 추가
        foreach ($list as &$item) {
            $thumbSql = "SELECT file_path FROM nininote_upfiles
                        WHERE nininotef_id = :note_id AND LEFT(file_type, 5) = 'image'
                        ORDER BY id ASC LIMIT 1";
            $thumbStmt = $pdo->prepare($thumbSql);
            $thumbStmt->execute(['note_id' => $item['id']]);
            $thumb = $thumbStmt->fetch(PDO::FETCH_ASSOC);
            $item['file_path'] = $thumb['file_path'] ?? null;
        }

        return $list;
    }
}