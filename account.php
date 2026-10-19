<?php
declare(strict_types=1);

$mode = isset($_GET['mode']) && is_string($_GET['mode']) && $_GET['mode'] === 'register' ? 'register' : 'login';
$pageTitle = $mode === 'register' ? 'Register' : 'Log in';
require __DIR__ . '/includes/header.php';
?>
<section class="container pending-page section-space">
    <div class="pending-icon" aria-hidden="true">♡</div>
    <p class="eyebrow">Customer account</p>
    <h1><?= $mode === 'register' ? 'Create an account' : 'Welcome back' ?></h1>
    <p><?= $mode === 'register' ? 'Customer registration' : 'Customer login' ?> will be connected when authentication is implemented. No account data is collected in this frontend phase.</p>
    <span class="pending-pill">Coming in a future phase</span>
    <p><a class="text-link" href="index.php">Return to the home page →</a></p>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
