<?php
  namespace alura\banco\modelo;
  
  class Pessoas{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf){
      $this->validarNome($nome);
      $this->nome = $nome;
      $this->cpf = $cpf;
    }

    public function recuperaNome():string{
      return $this->nome;
    }

    public function recuperaCpf():string{
      return $this->cpf->recuperarCpf();
    }

    public function validarNome(string $nome){
      if(strlen($nome) < 5){
        echo "Nome invalido tente outro";
        exit;
      }
    }
  }
?>