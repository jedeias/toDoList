<?php

namespace src\Controllers;

include "../../vendor/autoload.php";

use src\Models\Core\Entities\Users\Users;
use src\Models\DataInMemory\UsersInMemory;

class UsersController{
    
    private UsersInMemory $usersInMemory;
    private Users $users;

    public function __construct() {
        $this->usersInMemory= new UsersInMemory();
        $this->users = new Users();
    }

    public function getUsersInMemory(): UsersInMemory
    {
        return $this->usersInMemory;
    }

    public function setUsersInMemory(UsersInMemory $usersInMemory): self
    {
        $this->usersInMemory = $usersInMemory;

        return $this;
    }

    public function getUsers(): Users
    {
        return $this->users;
    }

    public function setUsers(Users $users): self
    {
        $this->users = $users;

        return $this;
    }
}


// $userController = new UsersController();

// $userController->getUsers()->setEmail("joao@email.com");

// $user = $userController->getUsersInMemory()->getByEmail($userController->getUsers());

// echo '<pre>';

// print_r($user);

?>