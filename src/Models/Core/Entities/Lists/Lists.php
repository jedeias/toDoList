<?php

namespace src\Models\Core\Entities\Lists;
use src\Models\Core\Entities\Lists\Ilist;
use src\Models\Core\Entities\users\Iusers;
use src\Models\Core\Entities\Strategy\IstrategyStatus;
use src\Models\Core\Entities\Strategy\ToDo
;
class Lists Implements Ilist {
    private int $pk;
    private string $titulo;
    private string $descricao;
    private IstrategyStatus $status; // existem muitos status, possiveis então vou aplicar o startegy apenas para praticar já aproveitando que o projeto é para estudar desig patterns

    private Iusers $users;

    public function getPk(): int{

        return $this->pk;
    
    }

    public function setPk(int $pk): self{
    
        $this->pk = $pk;
        return $this;
    
    }

    public function getTitulo(): string{
    
        return $this->titulo;
    
    }

    public function setTitulo(string $titulo): self{
    
        $this->titulo = $titulo;
        return $this;
    
    }

    public function getDescricao(): string{
    
        return $this->descricao;
    
    }

    public function setDescricao(string $descricao): self{
        
        $this->descricao = $descricao;
        return $this;

    }
    public function getStatus(): IstrategyStatus{
        
        return $this->status;
    
    }

    public function setStatus(IstrategyStatus $status): self{
        
        $this->status = $status;

        return $this;
    }

    public function getUsers(): Iusers{
        return $this->users;
    }

    public function setUsers(Iusers $users): self{

        $this->users = $users;

        return $this;
    }

}

?>
