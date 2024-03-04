<?php

namespace Model;

class User
{
    private string $name;
    private string $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function toArray()
    {
        return [
            'name' => $this->get_name(),
            'email' => $this->get_email(),
        ];
    }
}

