<?php
declare(strict_types=1);

$pageTitle = 'About us';
$activePage = 'about';
require __DIR__ . '/includes/header.php';
?>
<section class="page-banner about-banner">
    <div class="container"><p class="eyebrow eyebrow-light">Our point of view</p><h1>Clothing can carry<br><em>more than color.</em></h1></div>
</section>
<section class="container story-layout section-space">
    <div class="story-image"><img src="https://images.unsplash.com/photo-1603217192097-13c306522271?auto=format&fit=crop&w=1000&q=85" alt="A sample traditional outfit in a deep jewel tone" loading="lazy"></div>
    <div class="story-copy">
        <p class="eyebrow">Hello from Hamro Poshak</p>
        <h2>A storefront in the making.</h2>
        <p>Hamro Poshak is being developed as a single-seller online store celebrating traditional Nepali clothing and jewelry. This page and the products currently shown are part of a frontend demonstration.</p>
        <p>Nepal’s cultural and textile traditions are wonderfully diverse. We aim to describe them thoughtfully, avoid treating any one style as universal, and make room for the people and makers whose knowledge gives garments their meaning.</p>
        <div class="story-values"><span>Thoughtful storytelling</span><span>Respect for craft</span><span>Made for connection</span></div>
    </div>
</section>
<section class="culture-section about-note">
    <div class="container">
        <p class="eyebrow">A note on representation</p>
        <h2>Tradition is not one-size-fits-all.</h2>
        <p>Garments, ornaments, and their meanings can vary between communities, regions, families, and occasions. Product descriptions in this demonstration are introductory examples, not claims of authenticity or endorsements by any community.</p>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
