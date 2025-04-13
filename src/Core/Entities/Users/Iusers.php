<?php

namespace src\Core\Entities\Users;

interface Iusers{
  function getPk(): int;
  function setPk(int $pk): self;
  function getNome() : string;
  function setNome(string $nome) : self;
  function getEmail() : string;
  function setEmail(string $email) : self;
  function getSenha() : string;
  function setSenha(string $senha) : self;
  function getTipo() : string;
  function setTipo(string $tipo) : self;

}

?>