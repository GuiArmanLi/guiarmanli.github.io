<?php

namespace App\User;

use App\User\UserModel;

class UserController
{
    private $userModel;

    private function __construct()
    {
        $this->userModel = new UserModel;
    }

    public function findAll(): void
    {
        $this->userModel->findAll();
    }

    public function save(): void
    {
        $this->userModel->save();
    }
}
