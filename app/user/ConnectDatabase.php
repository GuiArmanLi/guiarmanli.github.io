<?php

namespace App\User;

require_once '../../vendor/autoload.php';

use Doctrine\DBAL\DriverManager;
use Dotenv\Dotenv;

class ConnectDatabase
{
    private $dotenv;

    private function __construct()
    {
        $this->dotenv = Dotenv::createUnsafeImmutable(__DIR__);
        $this->dotenv->load();
    }

    private static $instance;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new ConnectDatabase;
        }

        return self::$instance;
    }

    private $connectionParams = [
        'dbname' => getenv("DB_NAME"),
        'user' => getenv("DB_USERNAME"),
        'password' => getenv("PASSWORD"),
        'host' => getenv("HOST"),
        'driver' => 'pdo_pgsql',
    ];

    public function dbConnection()
    {
        try {
            return DriverManager::getConnection(self::$connectionParams);
        } catch (\Throwable $error) {
            echo $error->getMessage();
        }
    }
}
