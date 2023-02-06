<?php
  require_once './autoload.php';

  use alura\banco\modelo\Cpf;
  use alura\banco\modelo\funcionarios\Gerente;

  $gerente = new Gerente(new Cpf('123.123.123-02'), 'Edgar', 10000, '1235');
?>