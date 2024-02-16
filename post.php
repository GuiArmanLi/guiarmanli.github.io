<?php
$servername = getenv("SERVERNAME");
$username = getenv("USERNAME");
$password = getenv("PASSWORD");
$dbname = getenv("DBNAME");

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Erro: " . $connection->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$name', '$email')";

if ($connection->query($sql)) {
    echo "Sucesso!";
} else {
    echo "Erro: " . $sql . "\t" . $connection->error;
}

$connection->close();
