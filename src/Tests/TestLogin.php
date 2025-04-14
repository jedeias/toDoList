<?php

namespace src\Tests;

include_once("vendor/autoload.php");

use src\Models\Core\UseCases\Login\Login;
use src\Models\Core\Entities\Users\Users;


$usuario = new Users();

$usuario->setEmail("joao@email.com")->setSenha("1234561");


$login = new Login();
$userIsLoged = $login->login($usuario);

if($userIsLoged) {
    print_r($userIsLoged);
}
    
echo "Falha ao logar usuário.";

?>