<?php 

namespace src\Models\Core\Entities\Strategy;
use src\Models\Core\Entities\Strategy\IstrategyStatus;

class ToDo implements IstrategyStatus{
  public function statusDaTarefa(): string {
    return ("Para fazer");
  }
}

?>