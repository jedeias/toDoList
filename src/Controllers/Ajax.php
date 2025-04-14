<?php

namespace src\Controllers;


require_once("../../vendor/autoload.php");

header("Content-Type: application/json");

use src\Controllers\RequestsUpdates;

$class = new RequestsUpdates();


echo(json_encode($class->getUpdatesTodo()));
// $class->getUpdatesTodo();

?>