<?php
namespace App\Model;

use Exception;

class UserModel
{
    private $name;
    private $email;
    private $connection;

    public function __construct()
    {
        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->connection = dbConnection();
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
        if (!empty($this->name) && !empty($this->email)) {
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
