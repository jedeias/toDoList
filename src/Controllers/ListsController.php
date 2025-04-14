<?php

namespace src\Controllers;

include "../../vendor/autoload.php";

use src\Models\Core\Entities\Lists\Ilist;
use src\Models\Core\Entities\Lists\Lists;
use src\Models\Core\Entities\Users\Iusers;
use src\Models\Core\Entities\Users\Users;
use src\Models\Core\Entities\Strategy;
use src\Models\DataInMemory\Interface\IListInMemory;
use src\Models\DataInMemory\ListInMemory;

class ListsController{
    
    private Ilist $lists;
    private Iusers $users;
    private IListInMemory $listInMemory;

    public function __construct() {
        $this->lists = new Lists();
        $this->users = new Users();
        $this->listInMemory = new ListInMemory();
    }

    public function getLists(): Ilist{
        return $this->lists;
    }

    public function setLists(Ilist $lists): self{
        $this->lists = $lists;

        return $this;
    }

    public function getUsers(): Iusers{
        return $this->users;
    }

    public function setUsers(Iusers $users): self{
        $this->users = $users;

        return $this;
    }

    public function getListInMemory(): IListInMemory{
        return $this->listInMemory;
    }

    public function setListInMemory(IListInMemory $listInMemory): self{
        $this->listInMemory = $listInMemory;

        return $this;
    }
}


// $controller = new ListsController();

// $status = new Strategy\ToDo();

// $controller->getLists()->setTitulo("Lista 1")->setDescricao("Descricao 1")->setStatus($status);

// echo '<pre>';

// print_r($controller->getLists());
// print_r($controller->getLists()->getStatus()->statusDaTarefa())

?>