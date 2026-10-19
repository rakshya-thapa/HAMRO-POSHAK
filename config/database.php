<?php
declare(strict_types=1);

function getDatabaseConnection(): mysqli
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $host = getenv('HAMRO_DB_HOST');
    $username = getenv('HAMRO_DB_USER');
    $password = getenv('HAMRO_DB_PASSWORD');
    $database = getenv('HAMRO_DB_NAME');
    $port = getenv('HAMRO_DB_PORT');

    return new mysqli(
        $host !== false && $host !== '' ? $host : '127.0.0.1',
        $username !== false && $username !== '' ? $username : 'root',
        $password !== false ? $password : '',
        $database !== false && $database !== '' ? $database : 'hamro_poshak',
        $port !== false && $port !== '' ? (int) $port : 3306
    );
}
