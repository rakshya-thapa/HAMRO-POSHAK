<article class="product-card">
    <a class="product-image-link" href="product.php?id=<?= rawurlencode($product['id']) ?>" aria-label="View <?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?> details">
        <img class="product-image" src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($product['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
        <?php if ($product['stock'] === 0): ?>
            <span class="product-badge sold-out">Currently unavailable</span>
        <?php elseif ($product['featured']): ?>
            <span class="product-badge">Featured</span>
        <?php endif; ?>
    </a>
    <div class="product-card-body">
        <div class="product-meta"><span><?= htmlspecialchars($product['category'], ENT_QUOTES, 'UTF-8') ?></span><span><?= htmlspecialchars($product['occasion'], ENT_QUOTES, 'UTF-8') ?></span></div>
        <h3><a href="product.php?id=<?= rawurlencode($product['id']) ?>"><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></a></h3>
        <div class="product-card-bottom">
            <strong><?= formatNpr((int) $product['price']) ?></strong>
            <?php if ($product['stock'] > 0): ?>
                <span class="availability">Available</span>
            <?php else: ?>
                <span class="availability unavailable">Out of stock</span>
            <?php endif; ?>
        </div>
        <div class="product-card-actions">
            <a class="btn btn-outline-heritage" href="product.php?id=<?= rawurlencode($product['id']) ?>">View details</a>
            <button class="btn btn-cart-pending" type="button" disabled title="Cart will be connected in a future phase">Cart soon</button>
        </div>
    </div>
</article>
