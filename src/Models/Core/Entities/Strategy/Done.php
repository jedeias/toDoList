<?php 

namespace src\Models\Core\Entities\Strategy;
use src\Models\Core\Entities\Strategy\IstrategyStatus;

class Done implements IstrategyStatus{
  public function statusDaTarefa(): string {
    return ("Concluido");
  }
}

?>