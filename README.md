# Hamro Poshak

Hamro Poshak is a single-seller online store project for traditional Nepali clothing and jewelry. This repository currently contains the local PHP project setup only; customer and admin features will be developed in later phases.

## Project structure

```text
Hamroposak/
├── admin/                 # Admin pages (added in a later phase)
├── assets/
│   ├── css/style.css       # Shared styles
│   └── js/                 # JavaScript files
├── config/
│   └── database.php        # Central MySQL connection function
├── customer/               # Customer-facing pages (added in a later phase)
├── database/
│   └── setup.sql           # Creates the empty project database
├── includes/
│   ├── footer.php          # Shared page footer
│   └── header.php          # Shared page header and navigation
├── uploads/
│   └── products/           # Product images; executable files are blocked
├── index.php               # PHP runtime test page
└── README.md
```

## Run locally with XAMPP

1. Install and open the XAMPP Control Panel.
2. Copy the entire `Hamroposak` project folder into XAMPP's `htdocs` directory. The typical Windows path is `C:\xampp\htdocs\Hamroposak`.
3. In the XAMPP Control Panel, click **Start** next to **Apache** and **MySQL**. Both services should show as running.
4. Open [http://localhost/Hamroposak/](http://localhost/Hamroposak/) in a browser. The page should show **PHP is working**.
5. To create the empty project database, open [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/), choose **Import**, select `database/setup.sql`, then click **Import**. Alternatively, run the contents of that SQL file in phpMyAdmin's **SQL** tab.

The setup script creates only the `hamro_poshak` database; it intentionally creates no tables yet.

## Database connection

`config/database.php` contains the one shared `getDatabaseConnection()` function for future PHP pages. It uses these environment variables when provided:

- `HAMRO_DB_HOST` (default: `127.0.0.1`)
- `HAMRO_DB_PORT` (default: `3306`)
- `HAMRO_DB_NAME` (default: `hamro_poshak`)
- `HAMRO_DB_USER` (default: `root`)
- `HAMRO_DB_PASSWORD` (default: empty, as in a typical fresh local XAMPP setup)

Set the environment variables to match your local MySQL account if you changed the XAMPP defaults. The `config` directory is blocked from direct web access by `.htaccess`. Do not use the local defaults on a public server.

## Uploaded images

Product images belong in `uploads/products/`. Directory listing is disabled, and Apache is configured to deny requests for common executable file extensions there. The product image upload feature must still validate file type, size, and content on the server when it is implemented.

## Other local PHP servers

If PHP is installed but XAMPP is not being used, run `php -S 127.0.0.1:8000` from the project directory and open [http://127.0.0.1:8000/](http://127.0.0.1:8000/). This only tests PHP page rendering; Apache `.htaccess` protections are not applied by PHP's built-in server.
