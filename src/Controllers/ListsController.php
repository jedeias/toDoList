<?php

namespace src\Controllers;

use src\Models\Core\Entities\Lists\Ilist;
use src\Models\Core\Entities\Lists\Lists;
use src\Models\Core\Entities\Users\Iusers;
use src\Models\Core\Entities\Users\Users;
use src\Models\Core\Entities\Strategy;
use src\Models\DataInMemory\Interface\IListInMemory;
use src\Models\DataInMemory\ListInMemory;
use src\Controllers\ObserversControllers\ISubjects;
use src\Controllers\ObserversControllers\Iobservers;


class ListsController implements ISubjects{
    
    private Ilist $lists;
    private Iusers $users;
    private IListInMemory $listInMemory;
    
    private array $observers = [];

    public function __construct() {
        $this->lists = new Lists();
        $this->users = new Users();
        $this->listInMemory = new ListInMemory();
    }

    public function getLists(): Ilist{
        $this->notifyObservers("ListsController");
        return $this->lists;
    }

    public function setLists(Ilist $lists): self{
        $this->notifyObservers("ListsController");
        $this->lists = $lists;

        return $this;
    }

    public function getUsers(): Iusers{
        $this->notifyObservers("ListsController");
        return $this->users;
    }

    public function setUsers(Iusers $users): self{
        $this->notifyObservers("ListsController");
        $this->users = $users;

        return $this;
    }

    public function getListInMemory(): IListInMemory{
        $this->notifyObservers("ListsController");
        return $this->listInMemory;
    }

    public function setListInMemory(IListInMemory $listInMemory): self{
        $this->notifyObservers("ListsController");
        $this->listInMemory = $listInMemory;

        return $this;
    }

    public function notifyObservers(string $observer): void{
        if(!empty($this->observers)) {
            foreach ($this->observers as $observerInLoop) {
                $observerInLoop->update($observer);
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


// $controller = new ListsController();

// $status = new Strategy\ToDo();

// $controller->getLists()->setTitulo("Lista 1")->setDescricao("Descricao 1")->setStatus($status);

// echo '<pre>';

// print_r($controller->getLists());
// print_r($controller->getLists()->getStatus()->statusDaTarefa())

?>