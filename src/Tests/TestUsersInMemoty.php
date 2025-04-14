<?php

namespace src\Tests;
use src\Models\Core\Entities\Users\Users;
use src\Models\DataInMemory\UsersInMemory;

require_once "vendor/autoload.php";

// $usersList = new UsersInMemory::constructUser(1, "joão@email.com", "123456", "admin");

$user = new Users();

$user->setNome("vanderlei")->setSenha("senha")->setTipo("admim")->setEmail("vanderlei@capitano.com");

$usersList = new UsersInMemory();
$usersList->addUser($user);

print_r($usersList->getByEmail($user));

?>