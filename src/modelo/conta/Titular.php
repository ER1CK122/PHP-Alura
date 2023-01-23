<?php
  namespace alura\banco\modelo\Conta;

  use alura\banco\modelo\Pessoas;
  use alura\banco\modelo\Endereco;
  use alura\banco\modelo\Cpf;

  class Titular extends Pessoas{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco){
      parent::__construct($nome, $cpf);
      $this->endereco = $endereco;
    }
    
    public function recuperarCidadeTitular():string{
      return $this->endereco->recuperarCidade();
    }
  }

?>