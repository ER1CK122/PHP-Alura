<?php
  namespace alura\banco\modelo\conta;

  use alura\banco\modelo\conta\Conta;

  class ContaPoupanca extends Conta{
    public function percentualTarifa():float{
      return 0.03;
    }
  }
?>