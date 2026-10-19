# Hamro Poshak

Hamro Poshak is a single-seller online store for traditional Nepali clothing and jewelry. The current phase is a responsive customer-facing frontend built with PHP includes, Bootstrap 5, CSS, and JavaScript.

## Run locally with XAMPP

1. Place the project folder in XAMPP's `htdocs` directory, typically `C:\xampp\htdocs\Hamroposak`.
2. Start **Apache** from the XAMPP Control Panel. MySQL is not required for this frontend phase.
3. Open [http://localhost/Hamroposak/](http://localhost/Hamroposak/) in a browser.

The pages use the sample catalog in `includes/sample-products.php`; the database is not connected yet. Products, prices, availability, and business contact details are demonstration placeholders. Account, cart, checkout, and contact form integrations are not implemented. The Bootstrap and font assets are loaded from public CDNs, so those parts need an internet connection.

## Customer pages

- `index.php` — storefront home, collections, and featured sample products.
- `catalog.php?type=dress` — traditional dress samples.
- `catalog.php?type=jewelry` — jewelry samples.
- `catalog.php` — all sample products.
- `product.php?id=red-sari` — sample product details. Other product IDs are in `includes/sample-products.php`.
- `about.php` and `contact.php` — informational pages with placeholders.
- `account.php?mode=login` / `account.php?mode=register` and `cart.php` — explain which integrations are still pending.

Catalog search and filters run in the browser using `assets/js/storefront.js`. Shared navigation and footer markup live in `includes/header.php` and `includes/footer.php`; styles are in `assets/css/style.css`.

## Database setup

The database setup script is reserved for a later backend phase. It creates an empty `hamro_poshak` database and is not needed to run the current customer frontend. The shared connection helper in `config/database.php` uses `HAMRO_DB_HOST`, `HAMRO_DB_PORT`, `HAMRO_DB_NAME`, `HAMRO_DB_USER`, and `HAMRO_DB_PASSWORD` environment variables.
