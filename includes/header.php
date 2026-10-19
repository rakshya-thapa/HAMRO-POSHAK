<?php
declare(strict_types=1);

$pageTitle = $pageTitle ?? 'Hamro Poshak';
$activePage = $activePage ?? '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Discover Nepali traditional clothing, jewelry, and craft-inspired style at Hamro Poshak.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> | Hamro Poshak</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="announcement-bar">A celebration of heritage, craftsmanship, and you</div>
<header class="site-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand brand" href="index.php" aria-label="Hamro Poshak home">
                <span class="brand-mark" aria-hidden="true">ह</span>
                <span>Hamro <strong>Poshak</strong><small>Woven with heritage</small></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= $activePage === 'dresses' ? 'active' : '' ?>" href="catalog.php?type=dress">Traditional Dresses</a></li>
                    <li class="nav-item"><a class="nav-link <?= $activePage === 'jewelry' ? 'active' : '' ?>" href="catalog.php?type=jewelry">Jewelry</a></li>
                    <li class="nav-item"><a class="nav-link <?= $activePage === 'about' ? 'active' : '' ?>" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link <?= $activePage === 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a></li>
                </ul>
                <div class="header-actions">
                    <form class="header-search" action="catalog.php" method="get" role="search">
                        <label class="visually-hidden" for="siteSearch">Search products</label>
                        <input id="siteSearch" type="search" name="q" placeholder="Search pieces..." aria-label="Search products">
                        <button type="submit" aria-label="Submit search">⌕</button>
                    </form>
                    <a class="header-link" href="account.php?mode=login">Log in</a>
                    <a class="header-link register-link" href="account.php?mode=register">Register</a>
                    <a class="cart-link" href="cart.php" aria-label="Shopping bag, cart integration pending">
                        <svg aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path d="M5 8h14l1 13H4L5 8Zm4 0a3 3 0 0 1 6 0" /></svg><span class="cart-label">Bag</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main id="main-content">
