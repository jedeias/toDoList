<?php

namespace src\Tests;

require_once("vendor/autoload.php");

use src\DataInMemory\ListInMemory;
use src\Core\Entities\Lists\Lists;
use src\Core\Entities\Users\Iusers;
use src\Core\Entities\Strategy;

$testListInMemory = new ListInMemory();

$lista = new Lists();

$doing = new Strategy\Doing();

$lista->setPk(8)->setTitulo("Lista de tarefas")->setDescricao("Lista de tarefas do dia")->setStatus($doing);

$testListInMemory->addList($lista);

print_r($testListInMemory);

$testListInMemory->deleteList(2);

print_r($testListInMemory->getAll());

print_r($lista->getStatus()->statusDaTarefa());

?>