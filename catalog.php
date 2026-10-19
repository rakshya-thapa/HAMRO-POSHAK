<?php
declare(strict_types=1);

require __DIR__ . '/includes/sample-products.php';
$requestedType = isset($_GET['type']) && is_string($_GET['type']) ? $_GET['type'] : 'all';
$productType = in_array($requestedType, ['dress', 'jewelry'], true) ? $requestedType : 'all';
$searchQuery = isset($_GET['q']) && is_string($_GET['q']) ? trim($_GET['q']) : '';
$pageTitle = $productType === 'dress' ? 'Traditional dresses' : ($productType === 'jewelry' ? 'Jewelry' : 'Shop all');
$activePage = $productType === 'dress' ? 'dresses' : ($productType === 'jewelry' ? 'jewelry' : '');
$visibleProducts = array_values(array_filter(
    $sampleProducts,
    static fn (array $product): bool => $productType === 'all' || $product['type'] === $productType
));
$categories = array_values(array_unique(array_column($visibleProducts, 'category')));
$occasions = array_values(array_unique(array_column($visibleProducts, 'occasion')));
require __DIR__ . '/includes/header.php';
?>
<section class="catalog-intro">
    <div class="container">
        <p class="eyebrow">The sample collection</p>
        <h1><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
        <p>Explore demonstration pieces inspired by Nepal’s rich textile and adornment traditions.</p>
    </div>
</section>
<section class="container catalog-layout section-space" aria-label="Product catalog">
    <aside class="catalog-filters" aria-label="Filter products">
        <div class="filter-heading"><h2>Refine your search</h2><button type="button" class="filter-reset" data-filter-reset>Clear all</button></div>
        <div class="filter-field">
            <label for="catalogSearch">Search products</label>
            <input class="form-control" type="search" id="catalogSearch" value="<?= htmlspecialchars($searchQuery, ENT_QUOTES, 'UTF-8') ?>" placeholder="Try “sari”">
        </div>
        <div class="filter-field">
            <label for="categoryFilter">Category</label>
            <select class="form-select" id="categoryFilter"><option value="">All categories</option>
                <?php foreach ($categories as $category): ?><option value="<?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?></option><?php endforeach; ?>
            </select>
        </div>
        <div class="filter-field">
            <label for="occasionFilter">Occasion</label>
            <select class="form-select" id="occasionFilter"><option value="">All occasions</option>
                <?php foreach ($occasions as $occasion): ?><option value="<?= htmlspecialchars($occasion, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($occasion, ENT_QUOTES, 'UTF-8') ?></option><?php endforeach; ?>
            </select>
        </div>
        <fieldset class="filter-field price-filter">
            <legend>Price range (NPR)</legend>
            <div class="price-inputs">
                <label><span class="visually-hidden">Minimum price</span><input class="form-control" type="number" id="minPrice" min="0" placeholder="Min" inputmode="numeric"></label>
                <span aria-hidden="true">—</span>
                <label><span class="visually-hidden">Maximum price</span><input class="form-control" type="number" id="maxPrice" min="0" placeholder="Max" inputmode="numeric"></label>
            </div>
        </fieldset>
        <div class="filter-field">
            <label for="availabilityFilter">Availability</label>
            <select class="form-select" id="availabilityFilter">
                <option value="">Any availability</option><option value="available">In stock</option><option value="unavailable">Out of stock</option>
            </select>
        </div>
        <p class="filter-note">Prices and stock are examples only, not live inventory.</p>
    </aside>
    <div class="catalog-results">
        <div class="results-toolbar"><p id="resultCount" aria-live="polite"><?= count($visibleProducts) ?> sample pieces</p><span>All amounts shown in NPR</span></div>
        <div class="row g-4 product-grid" id="productGrid">
            <?php foreach ($visibleProducts as $product): ?>
                <div class="col-sm-6 col-xl-4 catalog-product"
                     data-name="<?= htmlspecialchars(strtolower($product['name']), ENT_QUOTES, 'UTF-8') ?>"
                     data-category="<?= htmlspecialchars($product['category'], ENT_QUOTES, 'UTF-8') ?>"
                     data-occasion="<?= htmlspecialchars($product['occasion'], ENT_QUOTES, 'UTF-8') ?>"
                     data-price="<?= (int) $product['price'] ?>"
                     data-availability="<?= $product['stock'] > 0 ? 'available' : 'unavailable' ?>">
                    <?php require __DIR__ . '/includes/product-card.php'; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="empty-state d-none" id="emptyState" role="status">
            <span class="empty-icon" aria-hidden="true">⌕</span>
            <h2>No pieces found</h2>
            <p>Try another search or clear one or more filters.</p>
            <button class="btn btn-heritage" type="button" data-filter-reset>Clear filters</button>
        </div>
    </div>
</section>
<div class="sample-notice"><div class="container"><strong>Demo storefront:</strong> this catalog uses sample product details, prices, and availability.</div></div>
<?php require __DIR__ . '/includes/footer.php'; ?>
