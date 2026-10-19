<?php
declare(strict_types=1);

require __DIR__ . '/includes/sample-products.php';
$pageTitle = 'Traditional Nepali clothing & jewelry';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
    <div class="hero-image" role="img" aria-label="Traditional clothing in rich, warm colors"></div>
    <div class="container hero-content">
        <p class="eyebrow eyebrow-light">Made for moments that matter</p>
        <h1>Wear the stories<br>that bring us <em>together.</em></h1>
        <p>Explore traditional-inspired clothing and jewelry that honor the color, craft, and spirit of Nepal.</p>
        <div class="hero-actions">
            <a class="btn btn-cream" href="catalog.php?type=dress">Explore the collection <span aria-hidden="true">→</span></a>
            <a class="hero-text-link" href="about.php">Our story</a>
        </div>
        <span class="hero-caption">A sample collection · Demonstration products</span>
    </div>
</section>

<section class="container section-space" aria-labelledby="categoryTitle">
    <div class="section-heading">
        <div><p class="eyebrow">Find your expression</p><h2 id="categoryTitle">Explore the collections</h2></div>
        <a class="text-link" href="catalog.php">Browse all pieces <span aria-hidden="true">→</span></a>
    </div>
    <div class="row g-4">
        <div class="col-md-6">
            <a class="category-tile category-dresses" href="catalog.php?type=dress">
                <img src="https://images.unsplash.com/photo-1610030469983-98e550d6193c?auto=format&fit=crop&w=1100&q=85" alt="Traditional clothing in jewel tones" loading="lazy">
                <span class="category-shade"></span>
                <span class="category-copy"><small>Color, texture, tradition</small><strong>Traditional dresses</strong><span>Discover the collection →</span></span>
            </a>
        </div>
        <div class="col-md-6">
            <a class="category-tile category-jewelry" href="catalog.php?type=jewelry">
                <img src="https://images.unsplash.com/photo-1611652022419-a9419f74343d?auto=format&fit=crop&w=1100&q=85" alt="Decorative gold-tone jewelry" loading="lazy">
                <span class="category-shade"></span>
                <span class="category-copy"><small>Finishing touches</small><strong>Jewelry & adornments</strong><span>Find your favorite →</span></span>
            </a>
        </div>
    </div>
</section>

<section class="featured-section section-space" aria-labelledby="featuredTitle">
    <div class="container">
        <div class="section-heading">
            <div><p class="eyebrow">Selected with care</p><h2 id="featuredTitle">A few favorites</h2></div>
            <a class="text-link" href="catalog.php">See all products <span aria-hidden="true">→</span></a>
        </div>
        <div class="row g-4">
            <?php foreach (array_slice(array_values(array_filter($sampleProducts, static fn (array $item): bool => $item['featured'])), 0, 4) as $product): ?>
                <div class="col-sm-6 col-lg-3"><?php require __DIR__ . '/includes/product-card.php'; ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="container section-space" aria-labelledby="occasionTitle">
    <div class="occasion-panel">
        <div class="occasion-copy">
            <p class="eyebrow eyebrow-light">Gather, celebrate, remember</p>
            <h2 id="occasionTitle">Pieces for every<br>kind of togetherness.</h2>
            <p>From joyful festivals to family celebrations, explore sample looks inspired by the occasions that bring people close.</p>
            <a class="btn btn-cream" href="catalog.php">Explore occasion edits <span aria-hidden="true">→</span></a>
        </div>
        <div class="occasion-image">
            <img src="https://images.unsplash.com/photo-1603217192097-13c306522271?auto=format&fit=crop&w=1000&q=85" alt="An example of richly colored traditional clothing" loading="lazy">
            <span>Festival · Celebration · Wedding</span>
        </div>
    </div>
</section>

<section class="match-section" aria-labelledby="matchTitle">
    <div class="container match-grid">
        <div class="match-image"><img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=1000&q=85" alt="Ornate gold-tone necklace" loading="lazy"></div>
        <div class="match-copy">
            <p class="eyebrow">The finishing touch</p>
            <h2 id="matchTitle">A little sparkle.<br>A lot of <em>meaning.</em></h2>
            <p>Explore jewelry pairings selected to complement the colors and details of our sample dress collection.</p>
            <a class="btn btn-heritage" href="catalog.php?type=jewelry">Explore jewelry <span aria-hidden="true">→</span></a>
            <p class="fine-print">Pairing ideas are for inspiration; all listed items are sample products.</p>
        </div>
    </div>
</section>

<section class="container culture-section section-space" aria-labelledby="cultureTitle">
    <p class="eyebrow">Craft carries memory</p>
    <h2 id="cultureTitle">A diverse heritage, told through detail.</h2>
    <p>Nepal is home to many communities, each with their own clothing, craft, and ways of celebrating. Our cultural notes are introductory and respectful; they are not a substitute for learning directly from the people and makers behind each tradition.</p>
    <a class="text-link" href="about.php">Learn about our approach <span aria-hidden="true">→</span></a>
</section>

<div class="sample-notice"><div class="container"><strong>Demo storefront:</strong> products, descriptions, prices, and stock shown here are sample data and are not available for purchase.</div></div>
<?php require __DIR__ . '/includes/footer.php'; ?>
