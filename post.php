<?php
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

use Doctrine\DBAL\DriverManager;

$connectionParams = [
    'dbname' => getenv("DB_NAME"),
    'user' => getenv("DB_USERNAME"),
    'password' => getenv("PASSWORD"),
    'host' => getenv("HOST"),
    'driver' => 'pdo_pgsql',
];

try {
    $connection = DriverManager::getConnection($connectionParams);

    $name = $_POST['name'];
    $email = $_POST['email'];

    $save = "INSERT INTO " . getenv("TABLE_NAME") . " (name, email) VALUES ('$name', '$email')";
    $connection->executeQuery($save);

    
    $findAllNames = "SELECT name FROM " . getenv("TABLE_NAME");
    $userNames = $connection->executeQuery($findAllNames);

    header("https://guiarmanli.github.io/");
} catch (Exception $error) {
    echo "ERRO!!!\n" . $error->getMessage();
}
