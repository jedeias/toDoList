<?php

namespace src\Controllers;
use src\Controllers\ObserversControllers\Iobservers;
use src\Controllers\ListsController;
use src\Controllers\UsersController;
use src\Models\Core\Entities\Strategy\ToDo;

class RequestsUpdates implements Iobservers{

    private static $isntace;


    private array $updatesTodo;


    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (!isset($_SESSION["updatesTodo"])) {
            $_SESSION["updatesTodo"] = [];
        }

        $this->updatesTodo = $_SESSION["updatesTodo"];
    }

    public function update(string $object): void{
        
        $now = time();

        if (!isset($this->updatesTodo[$object])) {
            $this->updatesTodo[$object] = date('d/m/Y H:i:s');
        } else {
            $oldTimestamp = strtotime($this->updatesTodo[$object]);
    
            if ($now > $oldTimestamp) {
                $this->updatesTodo[$object] = date('d/m/Y H:i:s');
            }
        }
    
        $_SESSION["updatesTodo"] = $this->updatesTodo;
    }

    public function getUpdatesTodo(): array{
        
        return $_SESSION["updatesTodo"] ?? [];
    }

    public function DoUpdate(): array{
        $updateControllers = [];


        if(!empty($this->updatesTodo)) {
            foreach ($this->updatesTodo as $update) {
                
            }
            $this->updatesTodo = [];
        }
    }
}

?>