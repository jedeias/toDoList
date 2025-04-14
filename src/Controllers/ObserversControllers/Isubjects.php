<?php

namespace src\Controllers\ObserversControllers;
use src\Controllers\ObserversControllers\Iobservers;


interface ISubjects{
    public function notifyObservers(string $observer): void;
    public function addObserver(Iobservers $observer): void;
    public function removeObserver(Iobservers $observer): void;
    public function ListObservers(): array;
}

?>