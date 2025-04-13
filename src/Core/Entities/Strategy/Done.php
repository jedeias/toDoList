<?php 

namespace src\Core\Entities\Strategy;
use src\Core\Entities\Strategy\IstrategyStatus;

class Done implements IstrategyStatus{
  public function statusDaTarefa(): string {
    return ("Concluido");
  }
}

?>