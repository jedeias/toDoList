<?php 

namespace src\Core\Entities\Strategy;
use src\Core\Entities\Strategy\IstrategyStatus;

class ToDo implements IstrategyStatus{
  public function statusDaTarefa(): string {
    return ("Para fazer");
  }
}

?>