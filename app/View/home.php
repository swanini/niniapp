<?php require_once __DIR__ . '/layouts/head.php'; ?>
<?php require_once __DIR__ . '/layouts/header.php'; ?>

<div class="db-check-container">
    <div class="status-box <?= $connectionStatus ?>">
        <img src="nini/img/<?= $connectionStatus === 'success' ? 'NiniApp.png' : 'error.png' ?>" alt="DB Status"
            class="status-icon">
        <?php if ($connectionStatus === 'success'): ?>
        <h2>✅ DB connection successful!</h2>
        <p>Database was successfully connected.</p>
        <?php elseif ($connectionStatus === 'fail'): ?>
        <h2>❌ Failed to connect to DB.</h2>
        <?php else: ?>
        <p>Checking DB status...</p>
        <?php endif; ?>
    </div>
</div>

<?php require_once __DIR__ . '/layouts/bottom.php'; ?>