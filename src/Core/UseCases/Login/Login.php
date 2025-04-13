<?php

namespace src\Core\UseCases\Login;
use src\Core\Entities\Users\Iusers;
use src\DataInMemory\Interface\IUsersInMemory;
use src\DataInMemory\UsersInMemory;

class Login
{
    private IUsersInMemory $usersInMemory;
    private Iusers $user;

    public function __construct()
    {
        $this->usersInMemory = new UsersInMemory();
        
    }

    public function login(Iusers $user): ?Iusers
    {
        $userInData = $this->usersInMemory->getByEmail($user);

        if ($user->getEmail() === $userInData->getEmail() && $user->getSenha() === $userInData->getSenha()) {
                        
            return $userInData;
        } else {
            return null;
        }
    }
}

?>