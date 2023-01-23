<?php

  namespace alura\banco\modelo;

  class Funcionario extends Pessoas{
    private string $cargo;

    public function __construct(Cpf $cpf, string $nome, string $cargo){
      parent::__construct($nome, $cpf);
      $this->cargo = $cargo;
    }

    public function recuperarCargoFuncionario():string{
      return $this->cargo;
    }

    public function alteraNome(string $nome){
      $this->nome = $nome;
    }
  }
?>