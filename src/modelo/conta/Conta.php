<?php
  namespace alura\banco\modelo\Conta;

  abstract class Conta{
    private Titular $titular;
    protected float $saldoTitular;
    private static $numeroContas = 0;

    public function __construct(Titular $titular){
      $this->titular = $titular;
      $this->saldoTitular = 0;
      self::$numeroContas++;
    }

    public function __destruct(){
      self::$numeroContas--;
    }

    public function sacar(float $valorSacar):void{

      $valorTarifa = $valorSacar * $this->percentualTarifa();

      $valorSaque = $valorSacar + $valorTarifa;


      if($valorSaque > $this->saldoTitular){
        echo 'Saque invalido';
        return;
      }

      $this->saldoTitular -= $valorSaque;
    }

    public function depositar(float $valorDeposito):void{
      if($valorDeposito < 0){
        echo 'Valor de Deposito tem que ser positivo';
        return;
      }
      
      $this->saldoTitular += $valorDeposito;
    }

    public function recuperarCpf():string{
      return $this->titular->recuperaCpf();
    }

    public function recuperarNome():string{
      return $this->titular->recuperaNome();
    }

    public function recuperarSaldo():string{
      return $this->saldoTitular;
    }

    public static function recuperarNumeroContas():float{
      return self::$numeroContas;
    }

    public function recuperarCidadeConta():string{
      return $this->titular->recuperarCidadeTitular();
    }

    abstract protected function percentualTarifa():float;
  }
?>