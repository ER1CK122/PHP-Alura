<?php
  namespace alura\banco\modelo;

  class Cpf{
    private string $cpf;

    public function __construct(string $valorCpf){
      $this->cpf = $valorCpf;
    }

    public function recuperarCpf():string{
      return $this->cpf;
    }
  }
?>