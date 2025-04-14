<?php

namespace src\Models\DataInMemory\Interface;
use src\Models\Core\Entities\Lists\Ilist;

interface IListInMemory{
    public function getAll(): array;
    public function getUserPk($key): ?array;
    public function addList(Ilist $list): void;
    public function updateList($key, Ilist $list): void;
    public function deleteList($key): void;

}

?>