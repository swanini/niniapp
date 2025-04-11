<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>홈</title>
</head>
<body>
    <h1>사용자 목록</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
