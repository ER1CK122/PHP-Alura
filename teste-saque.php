<?php
  require_once './autoload.php';

  use alura\banco\modelo\conta\{ContaPoupanca, ContaCorrente, Titular};
  use alura\banco\modelo\Cpf;
  use alura\banco\modelo\Endereco;

  $conta = new ContaPoupanca(new Titular(new Cpf('123.123.123-01'), 'Erick Nunes', new Endereco('Rio do Sul', 'qualquer', 'joão ledra', '2021')));

  $conta->depositar(1000);
  $conta->sacar(500);
  
  echo $conta->recuperarSaldo();

  


?>