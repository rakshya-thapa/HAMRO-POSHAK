<?php
declare(strict_types=1);

require __DIR__ . '/includes/sample-products.php';
$productId = isset($_GET['id']) && is_string($_GET['id']) ? $_GET['id'] : '';
$product = findSampleProduct($sampleProducts, $productId);
if ($product === null) {
    http_response_code(404);
}

$pageTitle = $product !== null ? $product['name'] : 'Product not found';
$activePage = $product !== null && $product['type'] === 'jewelry' ? 'jewelry' : 'dresses';
require __DIR__ . '/includes/header.php';
?>
<?php if ($product === null): ?>
    <section class="container not-found section-space">
        <p class="eyebrow">That piece is not in this sample collection</p>
        <h1>Product not found</h1>
        <p>Please return to the catalog to explore the available demonstration products.</p>
        <a class="btn btn-heritage" href="catalog.php">Browse products</a>
    </section>
<?php else: ?>
    <div class="container section-space">
        <nav class="breadcrumb-nav" aria-label="Breadcrumb">
            <a href="index.php">Home</a><span aria-hidden="true">/</span>
            <a href="catalog.php?type=<?= rawurlencode($product['type']) ?>"><?= $product['type'] === 'dress' ? 'Traditional dresses' : 'Jewelry' ?></a><span aria-hidden="true">/</span>
            <span aria-current="page"><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></span>
        </nav>
        <section class="product-detail">
            <div class="detail-image-wrap">
                <img class="detail-image" src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($product['alt'], ENT_QUOTES, 'UTF-8') ?>">
                <span class="demo-stamp">Sample product</span>
            </div>
            <div class="detail-copy">
                <p class="eyebrow"><?= htmlspecialchars($product['category'], ENT_QUOTES, 'UTF-8') ?> · <?= htmlspecialchars($product['occasion'], ENT_QUOTES, 'UTF-8') ?></p>
                <h1><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="detail-price"><?= formatNpr((int) $product['price']) ?></p>
                <p class="detail-description"><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></p>
                <p class="detail-availability">
                    <span class="availability-dot <?= $product['stock'] > 0 ? '' : 'dot-muted' ?>"></span>
                    <?= $product['stock'] > 0 ? 'Sample availability: ' . (int) $product['stock'] . ' shown' : 'Sample listing is out of stock' ?>
                </p>
                <div class="detail-demo-note">This is a demonstration listing. Product availability and pricing are not live.</div>
                <?php if ($product['stock'] > 0): ?>
                    <div class="quantity-row">
                        <label for="quantity">Quantity</label>
                        <div class="quantity-control">
                            <button type="button" data-quantity-change="-1" aria-label="Decrease quantity">−</button>
                            <input id="quantity" type="number" min="1" max="<?= (int) $product['stock'] ?>" value="1" inputmode="numeric">
                            <button type="button" data-quantity-change="1" aria-label="Increase quantity">+</button>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="btn btn-heritage detail-cart" disabled title="Cart will be connected in a future phase">Add to bag · coming soon</button>
                <p class="fine-print">Shopping cart and checkout are not connected in this frontend phase.</p>
                <div class="culture-note">
                    <h2>Cultural note</h2>
                    <p><?= htmlspecialchars($product['culture'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
        </section>
    </div>
    <?php if ($product['type'] === 'dress'): ?>
        <?php
        $matchingProducts = array_values(array_filter(
            $sampleProducts,
            static fn (array $item): bool => $item['type'] === 'jewelry' && $item['stock'] > 0
        ));
        ?>
        <section class="featured-section section-space">
            <div class="container">
                <div class="section-heading"><div><p class="eyebrow">Style it your way</p><h2>Jewelry to complement</h2></div><a class="text-link" href="catalog.php?type=jewelry">View all jewelry →</a></div>
                <div class="row g-4">
                    <?php foreach (array_slice($matchingProducts, 0, 3) as $product): ?><div class="col-sm-6 col-lg-4"><?php require __DIR__ . '/includes/product-card.php'; ?></div><?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
