<?php

namespace src\Core\Entities\Lists;

use src\Core\Entities\Users\Iusers;
use src\Core\Entities\Strategy\IstrategyStatus;

interface Ilist {
  function getPk(): int;
  function setPk(int $pk): self;
  function getTitulo(): string;
  function setTitulo(string $Titulo): self;
  function getDescricao(): string;
  function setDescricao(string $descricao): self;
  function getStatus(): IstrategyStatus;
  function setStatus(IstrategyStatus $status): self;
  function getUsers(): Iusers;
  function setUsers(Iusers $users): self;

}

?>