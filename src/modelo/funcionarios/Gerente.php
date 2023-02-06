<?php
  namespace alura\banco\modelo\funcionarios;
  
  use alura\banco\services\Autenticacao;

  class Gerente extends Funcionario implements Autenticacao{
    private string $senha;

    public function podeAutenticar():string{
      return $this->senha = '1234';
    }
  }
?>