<?php 

namespace src\Models\Core\Entities\Strategy;
use src\Models\Core\Entities\Strategy\IstrategyStatus;

class Doing implements IstrategyStatus{
  public function statusDaTarefa(): string {
    return ("Em andamento");
  }
}

?>