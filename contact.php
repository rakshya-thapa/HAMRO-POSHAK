<?php
declare(strict_types=1);

$pageTitle = 'Contact';
$activePage = 'contact';
require __DIR__ . '/includes/header.php';
?>
<section class="catalog-intro contact-intro">
    <div class="container"><p class="eyebrow">We would love to hear from you</p><h1>Contact Hamro Poshak</h1><p>Business contact details are placeholders until the store is ready.</p></div>
</section>
<section class="container contact-layout section-space">
    <div class="contact-card">
        <p class="eyebrow">Get in touch</p><h2>Business details</h2>
        <dl class="contact-details">
            <div><dt>Email</dt><dd>To be announced</dd></div>
            <div><dt>Phone</dt><dd>To be announced</dd></div>
            <div><dt>Address</dt><dd>To be announced</dd></div>
            <div><dt>Opening hours</dt><dd>To be announced</dd></div>
        </dl>
        <p class="fine-print">No real contact information has been supplied for this demonstration.</p>
    </div>
    <div class="contact-message">
        <h2>Send us a message</h2>
        <p>A contact form will be connected when the store backend is implemented.</p>
        <label for="contactName">Your name</label><input class="form-control" id="contactName" type="text" disabled placeholder="Form integration pending">
        <label for="contactEmail">Email address</label><input class="form-control" id="contactEmail" type="email" disabled placeholder="Form integration pending">
        <label for="contactMessage">Message</label><textarea class="form-control" id="contactMessage" rows="4" disabled placeholder="Form integration pending"></textarea>
        <button class="btn btn-cart-pending mt-3" type="button" disabled>Message form coming soon</button>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
