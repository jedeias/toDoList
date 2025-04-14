<?php

namespace src\Controllers;

include "../../vendor/autoload.php";

use src\Models\Core\Entities\Users\Users;
use src\Models\Core\UseCases\Login\Login;


class LoginContoller
{
    private Login $auth;

    function tryLogin(string $email, string $senha): ?Users {
        $this->auth = new Login();

        $user = new Users();
        $user->setEmail($email)->setSenha($senha);

        return $this->auth->login($user);
    }

}

// $user = new Users();

// $login = new LoginContoller();

// $user = $login->tryLogin($_POST['email'], $_POST['senha']);


?>