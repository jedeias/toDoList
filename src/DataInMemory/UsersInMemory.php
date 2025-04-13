<?php

namespace src\DataInMemory;

use src\DataInMemory\Interface\IUsersInMemory;
use src\Core\Entities\Users\Iusers;
use src\Core\Entities\Users\Users;

class UsersInMemory implements IUsersInMemory {
    private array $users = [];

    public function __construct() {
        $user1 = new Users();
        $user2 = new Users();

        $user1->setEmail("joao@email.com");
        $user1->setSenha("123456");
        $user1->setTipo("admin");

        $user2->setEmail("sebastiãoClemensioDaSilvaCravalhoDeOLiveiraJoana@email.com");
        $user2->setSenha("123456");
        $user2->setTipo("comum");

        $this->users[] = $user1;
        $this->users[] = $user2;
    }

    public function getAll(): array {
        return $this->users;
    }

    public function addUser(Iusers $user): void {
        $this->users[] = $user;
    }

    public function updateUser($pk, Iusers $user): void {
        if (isset($this->users[$pk])) {
            $this->users[$pk] = $user;
        }
    }

    public function deleteUser($pk): void {
        if (isset($this->users[$pk])) {
            unset($this->users[$pk]);
        }
    }

    public function getByEmail(Iusers $user): ?Iusers {
        foreach ($this->users as $userloop) {
            if ($user->getEmail() === $userloop->getEmail()) {
                return $userloop;
            }
        }
        return null;
    }

    public function getByIndex(int $index): ?Iusers {
        return $this->users[$index] ?? null;
    }
}

?>
