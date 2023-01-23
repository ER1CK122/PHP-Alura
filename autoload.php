<?php
  spl_autoload_register(function (string $namespaceClass){
    $caminhoUrl = str_replace('alura\\banco', 'src', $namespaceClass);
    $caminhoUrl = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoUrl);
    $caminhoUrl .= ".php";

    if(file_exists($caminhoUrl)){
      require_once $caminhoUrl;
    }
  });
?>