<?php

  namespace alura\banco\modelo\funcionarios;

  use alura\banco\modelo\Pessoas;
  use alura\banco\modelo\Cpf;

  abstract class Funcionario extends Pessoas{
    private float $salario;
    private string $senha;

    public function __construct(Cpf $cpf, string $nome, float $salario, string $senha){
      parent::__construct($nome, $cpf);
      $this->salario = $salario;
      $this->senha = $senha;
    }

    public function recuperarSalarioFuncionario():string{
      return $this->salario;
    }

    public function alteraNome(string $nome){
      $this->nome = $nome;
    }
  }
?>