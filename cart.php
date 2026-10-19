<?php
declare(strict_types=1);

$pageTitle = 'Shopping bag';
require __DIR__ . '/includes/header.php';
?>
<section class="container pending-page section-space">
    <div class="pending-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" focusable="false"><path d="M5 8h14l1 13H4L5 8Zm4 0a3 3 0 0 1 6 0" /></svg>
    </div>
    <p class="eyebrow">Your shopping bag</p>
    <h1>Cart is not connected yet</h1>
    <p>This frontend demonstration does not save cart items or process checkout. Product prices and availability are examples, not live inventory.</p>
    <a class="btn btn-heritage" href="catalog.php">Continue browsing</a>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
