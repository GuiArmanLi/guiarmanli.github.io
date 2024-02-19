<?php
require_once 'vendor/autoload.php';
use Doctrine\DBAL\DriverManager;

$host = getenv("HOST"); #Ainda local
$port = getenv("PORT");
$dbname = getenv("DBNAME");
$username = getenv("USERNAME");
$password = getenv("PASSWORD");
$tableName = getenv("TABLE_NAME");

$connectionParams = [
    'dbname' => "site",
    'user' => "postgres",
    'password' => "admin",
    'host' => "localhost",
    'driver' => 'pdo_pgsql',
];

$connection = DriverManager::getConnection($connectionParams);

$name = $_POST['name'];
$email = $_POST['email'];

$query = "INSERT INTO users_test (name, email) VALUES ('$name', '$email')";
try {
    $connection->executeQuery($query);
    
} catch (Exception $error) {
    echo "Erro: " . $error->getMessage();
    exit;
}

echo "Enviado";
