<?php
declare(strict_types=1);

require __DIR__ . '/includes/header.php';
?>

<section class="welcome">
    <p class="eyebrow">Project setup check</p>
    <h1>Hamro Poshak is ready to begin</h1>
    <p>This starter page confirms that PHP is running. Store features will be added in later phases.</p>

    <div class="status-card" role="status">
        <h2>PHP is working</h2>
        <p>Running PHP <?= htmlspecialchars(PHP_VERSION, ENT_QUOTES, 'UTF-8') ?>.</p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
