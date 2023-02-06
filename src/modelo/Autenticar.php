<?php
  class Autenticar{
    private string $senha;

    public function autenticacao(string $senha):void{
      if($this->senha !== $senha){
        echo "Senha errada tente outra";
        return;
      }

      echo "Login feito com sucesso";

    }
  }
?>