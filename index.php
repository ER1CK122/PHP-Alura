<?php
  require_once './autoload.php';

  use alura\banco\modelo\Funcionario;
  use alura\banco\modelo\Endereco;
  use alura\banco\modelo\Conta\Titular;
  use alura\banco\modelo\Cpf;
  use alura\banco\modelo\Conta\Conta;

  $primeiroFuncionario = new Funcionario(new Cpf('123.123.123-01'), 'Junior', 'Motorista');
  $endereco = new Endereco('Rio do sul', 'todos', 'logo ali', '2023');
  $primeiraConta = new Conta(new Titular(new Cpf('100.442.459-04'), 'Erick', $endereco));
  $segundaConta = new Conta(new Titular(new Cpf('123.123.123-87'), 'Jubileu', $endereco));
  $terceiraConta = new Conta(new Titular(new Cpf('123.123.123-12'), 'Edgar', $endereco));

  $primeiraConta->depositar(10000);

  $terceiraConta->depositar(5000);

  $terceiraConta->transferir(1500, $primeiraConta);

  $primeiraConta->sacar(150);

  $primeiraConta->transferir(100, $segundaConta);

  echo $primeiraConta->recuperarCpf();
  echo $primeiraConta->recuperarNome();
  echo $primeiraConta->recuperarSaldo();
  echo $primeiraConta->recuperarCidadeConta();

  echo "<br>";

  echo $terceiraConta->recuperarCpf();
  echo $terceiraConta->recuperarNome();
  echo $terceiraConta->recuperarSaldo();

  echo "<br>";

  echo $primeiroFuncionario->recuperarCargoFuncionario();

  echo "<br>";

  unset($segundaConta);
  
  echo Conta::recuperarNumeroContas();
?>