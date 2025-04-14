<?php

namespace src\Models\DataInMemory\Interface;
use src\Models\Core\Entities\Users\Iusers;

interface IUsersInMemory
{
    public function getAll(): array;
    public function getByEmail(Iusers $users): ? Iusers;
    public function addUser(Iusers $user): void;
    public function updateUser($pk, Iusers $user): void;
    public function deleteUser($pk): void;
}

?>