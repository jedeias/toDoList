<?php

namespace src\Models\DataInMemory;
use src\Models\DataInMemory\Interface\IUsersInMemory;
use src\Models\DataInMemory\Interface\IListInMemory;
use src\Models\Core\Entities\Lists\Ilist;
use src\Models\Core\Entities\Lists\Lists;
use src\Models\Core\Entities\Strategy;

class ListInMemory implements IListInMemory{
    private array $list = [];
    private IUsersInMemory $userRepository;

    public function __construct(){

        $lista1 = new Lists();
        $lista2 = new Lists();

        $lista1->setPk(1);
        $lista1->setTitulo("Tarefa 1");
        $lista1->setDescricao("Fazer café");
        $toDo = new Strategy\ToDo();
        $lista1->setStatus($toDo);
        
        $lista2->setPk(2);
        $lista2->setTitulo("Verificar e-mail");
        $lista2->setDescricao("Leia os 504 e-mails da caixa de entrada");
        $doing = new Strategy\Doing();
        $lista2->setStatus($doing);
        
        $this->list[] = $lista1;
        $this->list[] = $lista2;

    }

    public function getAll(): array{
        return $this->list;
    }
    
    public function addList(Ilist $list): void{
        $this->list[] = $list;
    }
    public function updateList($key, Ilist $list): void{
        $this->list[$key] = $list;
    }
    public function deleteList($key): void{
        unset($this->list[$key]);
    }
    public function getUserPk($key): ?array{
        foreach($this->list as $elementlist){
            if($elementlist["userPK"] == $key){
                return $elementlist;
            }
        }
        return null;
    }

    public function getByPk(int $pk): ?Ilist{
        return $this->list[$pk] ?? null;
    }
    
}


?>