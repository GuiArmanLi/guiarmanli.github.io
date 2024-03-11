<?php

require_once '../backend/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

use Doctrine\DBAL\DriverManager;

function dbConnection()
{
    $connectionParams = [
        'dbname' => getenv("DB_NAME"),
        'user' => getenv("DB_USERNAME"),
        'password' => getenv("PASSWORD"),
        'host' => getenv("HOST"),
        'driver' => 'pdo_pgsql',
    ];

    try {
        return DriverManager::getConnection($connectionParams);
    } catch (\Throwable $error) {
        echo $error->getMessage();
    }
}
