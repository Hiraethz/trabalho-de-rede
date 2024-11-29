<?php

class AtualizarUsuario{
    public function retornar(){
      $usuario = (new UserBanco())->atualizarUsuario($_POST['usuario'],$_POST['nome'],$_POST['senha'],$_POST['ativo']);
      if($usuario){
        return "Usuario atualizado! 😍";
      };
      return "Usuario não atulizado! 😒";
    }
}