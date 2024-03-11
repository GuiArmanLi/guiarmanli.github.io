<?php
namespace App\Controller;

use App\Model\UserModel;

class UserController
{
    private $user = new UserModel;

    public function findAll()
    {
        $this->user->findAll();
    }

    public function save()
    {
        $this->user->save();
    }

}
