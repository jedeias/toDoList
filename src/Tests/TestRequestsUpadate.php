<?php

namespace Src\Tests;

use src\Controllers\requests;
use src\Controllers\ListsController;

require_once("../../vendor/autoload.php");

use src\Controllers\RequestsUpdates;

header("Content-Type: application/json");

$requests = new RequestsUpdates();
$listsController = new ListsController();

$listsController->addObserver($requests);

$listsController->getLists()->setTitulo("Controller")->setDescricao("Controller de listas");

$listsController->getListInMemory()->addList($listsController->getLists());

// print_r($listsController->getListInMemory());

// print_r($requests->getUpdatesTodo());

echo json_encode($requests->getUpdatesTodo());

?>