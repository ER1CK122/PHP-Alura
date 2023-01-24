<?php
  namespace alura\banco\modelo\conta;

  use alura\banco\modelo\conta\Conta;

  class ContaCorrente extends Conta{
    public function percentualTarifa():float{
      return 0.05;
    } 

    public function transferir(float $valorTransferencia, $contaRecebe):void{
      if($valorTransferencia > $this->saldoTitular){
        echo 'Transferencia invalida';
        return;
      }

      $this->saldoTitular -= $valorTransferencia;
      $contaRecebe->saldoTitular += $valorTransferencia;
    }
  }
?>