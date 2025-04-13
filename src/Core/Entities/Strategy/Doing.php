<?php 

namespace src\Core\Entities\Strategy;
use src\Core\Entities\Strategy\IstrategyStatus;

class Doing implements IstrategyStatus{
  public function statusDaTarefa(): string {
    return ("Em andamento");
  }
}

?>