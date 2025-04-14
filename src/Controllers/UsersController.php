<?php

namespace src\Controllers;

use src\Models\Core\Entities\Users\Users;
use src\Models\DataInMemory\UsersInMemory;
use src\Controllers\ObserversControllers\ISubjects;
use src\Controllers\ObserversControllers\Iobservers;

class UsersController implements ISubjects{
    
    private UsersInMemory $usersInMemory;
    private Users $users;

    private array $observers = [];

    public function __construct() {
        $this->usersInMemory= new UsersInMemory();
        $this->users = new Users();
    }

    public function getUsersInMemory(): UsersInMemory{
        return $this->usersInMemory;
    }

    public function setUsersInMemory(UsersInMemory $usersInMemory): self{
        $this->notifyObservers("UsersController");
        $this->usersInMemory = $usersInMemory;

        return $this;
    }

    public function getUsers(): Users{
        return $this->users;
    }

    public function setUsers(Users $users): self{

        $this->notifyObservers("UsersController");
        $this->users = $users;

        return $this;
    }

    public function notifyObservers(string $observer): void{
        if (!empty($this->observers)) {
            foreach ($this->observers as $observer) {
                $observer->update($this->users);
            }        
        }
    }

    public function addObserver(Iobservers $observer): void{
        $this->observers[] = $observer;
    }

    public function removeObserver(Iobservers $observer): void{
        foreach ($this->observers as $key => $observerInLoop){
            if ($observerInLoop === $observer) {
                unset($this->observers[$key]);
            }
        }
    }
    public function ListObservers(): array{
        return $this->observers;
    }
}


// $userController = new UsersController();

// $userController->getUsers()->setEmail("joao@email.com");

// $user = $userController->getUsersInMemory()->getByEmail($userController->getUsers());

// echo '<pre>';

// print_r($user);

?>