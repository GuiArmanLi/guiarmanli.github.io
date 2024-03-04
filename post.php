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

    //$findAdll = "SELECT * FROM " . getenv("TABLE_NAME");
    //$users = $connection->executeQuery($findAdll);
    //foreach ($users as $user) {
    //    
    //}
    
    $save = "INSERT INTO " . getenv("TABLE_NAME") . " (name, email) VALUES ('$name', '$email')";
    $connection->executeQuery($save);

    header("https://guiarmanli.github.io/");
} catch (Exception $error) {
    echo "ERRO!!!\n" . $error->getMessage();
}
