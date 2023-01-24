<?php

  namespace alura\banco\modelo;

  class Funcionario extends Pessoas{
    private string $cargo;
    private string $salario;

    public function __construct(Cpf $cpf, string $nome, string $cargo, string $salario){
      parent::__construct($nome, $cpf);
      $this->cargo = $cargo;
      $this->salario = $salario;
    }

    public function recuperarCargoFuncionario():string{
      return $this->cargo;
    }

    public function recuperarSalarioFuncionario():string{
      return $this->salario;
    }

    public function alteraNome(string $nome){
      $this->nome = $nome;
    }

  }
?>