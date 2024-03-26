<?php

namespace App\User;

use App\User\ConnectDatabase;

use Exception;

class UserModel
{
    private static $instance;

    private $name;
    private $email;
    private $connection;

    public static function getInstance(): UserModel
    {
        if (self::$instance == null) {
            self::$instance = new UserModel;
        }

        return self::$instance;
    }

    private function __construct()
    {
        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->connection = ConnectionDatabase::getInstance()->dbConnection();
    }
    public function findAll()
    {
        try {
            return $this->connection->fetchAllAssociative(
                "SELECT * FROM " . getenv("TABLE_NAME")
            );
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function save()
    {
        echo "metodo save";
        if (!empty ($this->name) && !empty ($this->email)) {
            try {
                $this->connection->executeQuery(
                    "INSERT INTO " . getenv("TABLE_NAME") .
                    " (name, email) VALUES ($this->name, $this->email)"
                );
            } catch (Exception $error) {
                return $error->getMessage();
            }
        }
    }
}
